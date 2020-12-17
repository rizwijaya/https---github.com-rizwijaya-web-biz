<head>
    <!-- Title -->
    <title>Cetak Invoice Pembayaran</title>
    <!-- Bootstrap Css -->
    <link href="<?= BASEURL; ?>/assets_dashboard/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Dashboard Css -->
    <link href="<?= BASEURL; ?>/assets_dashboard/css/style.css" rel="stylesheet">
    <!-- Font-awesome  Css -->
    <link href="<?= BASEURL; ?>/assets_dashboard/css/icons.css" rel="stylesheet">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <!--Bootstrap-daterangepicker css-->
    <link href="<?= BASEURL; ?>/assets_dashboard/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!--Select2 Plugin -->
    <link href="<?= BASEURL; ?>/assets_dashboard/plugins/select2/select2.min.css" rel="stylesheet">
    <!-- Owl Theme css-->
    <link href="<?= BASEURL; ?>/assets_dashboard/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- Date Picker Plugin -->
    <link href="<?= BASEURL; ?>/assets_dashboard/plugins/date-picker/spectrum.css" rel="stylesheet">
    <!-- Custom scroll bar css-->
    <link href="<?= BASEURL; ?>/assets_dashboard/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">
    <!-- COLOR-SKINS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= BASEURL; ?>/assets_dashboard/colorskins/color-skins/color13.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/assets_dashboard/colorskins/demo.css">
</head>

<body>
    <?php foreach ($data['transaksi'] as $tk) : ?>
        <div class="card-body">
            <div class="table-responsive">
                <h3 class="card-title">Invoice Pembayaran Bizcar Rental</h3>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><strong>Nomor Transaksi</strong></td>
                            <td>:</td>
                            <td class="text-primary">#000<?= $tk['id_rental']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Merk Kendaraan</strong></td>
                            <td>:</td>
                            <td><?= $tk['merk']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Plat Nomor</strong></td>
                            <td>:</td>
                            <td><?= $tk['no_plat']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tanggal Sewa</strong></td>
                            <td>:</td>
                            <td><?php echo date('d/m/Y', strtotime($tk['tanggal_rental'])); ?></td>
                        </tr>
                        <td><strong>Tanggal Kembali</strong></td>
                        <td>:</td>
                        <td><?php echo date('d/m/Y', strtotime($tk['tanggal_kembali'])); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Biaya Sewa/Hari</strong></td>
                            <td>:</td>
                            <td>Rp. <?php echo number_format($tk['harga'], 0, ',', '.'); ?></td>
                        </tr>
                        <td><strong>Jumlah Hari Sewa</strong></td>
                        <td>:</td>
                        <td><?php
                            $rental = strtotime($tk['tanggal_rental']);
                            $kembali = strtotime($tk['tanggal_kembali']);
                            $jml = abs(($rental - $kembali) / (60 * 60 * 24));
                            echo "$jml Hari"
                            ?></td>
                        </tr>
                        <tr>
                            <td class="text-success"><strong>Total Pembayaran</strong></td>
                            <td class="text-success">:</td>
                            <td class="text-success"><strong>Rp. <?php echo number_format($tk['harga'] * $jml, 0, ',', '.'); ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; ?>
</body>
<footer>
    <script type="text/javascript">
        window.print();
    </script>
</footer>