<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?= BASEURL; ?>/assets_manage/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets_manage/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets_manage/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets_manage/css/argon.css?v=1.1.0" type="text/css">
    <title>Cetak Laporan</title>
</head>

<body>
    <h3>Laporan Transaksi</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pelanggan</th>
                    <th scope="col">Merk</th>
                    <th scope="col">Tgl. Sewa</th>
                    <th scope="col">Tgl. Kembali</th>
                    <th scope="col">Tgl. Pengembalian</th>
                    <th scope="col">Jumlah Hari</th>
                    <th scope="col">Total Denda</th>
                    <th scope="col">Pembayaran Awal</th>
                    <th scope="col">Total Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data['transaksi'] as $tk) : ?>
                    <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?= $tk['nama'] ?></td>
                        <td><?= $tk['merk'] ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tk['tanggal_rental'])); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tk['tanggal_kembali'])); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tk['tanggal_pengembalian'])); ?></td>
                        <td><?php
                            $rental = strtotime($tk['tanggal_rental']);
                            $dikembalikan = strtotime($tk['tanggal_pengembalian']);
                            $jml = abs(($rental - $dikembalikan) / (60 * 60 * 24));
                            echo "$jml Hari"
                            ?></td>
                        <td><?php
                            $kembali = strtotime($tk['tanggal_kembali']);
                            $jml_dikem = abs(($kembali - $dikembalikan) / (60 * 60 * 24));
                            ?> Rp. <?php echo number_format($jml_dikem * $tk['denda'], 0, ',', '.'); ?></td>
                        <td>
                            <?php 
                                $jml_bayar = abs(($rental - $kembali) / (60 * 60 * 24));
                            ?> Rp. <?php echo number_format($jml_bayar * $tk['harga'], 0, ',', '.'); ?></td>
                        <td>Rp. <?php echo number_format(($jml_dikem * $tk['denda']) + ($jml_bayar * $tk['harga']), 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <script type="text/javascript">
            window.print();
        </script>
    <!-- Ini table nya -->
</body>

</html>