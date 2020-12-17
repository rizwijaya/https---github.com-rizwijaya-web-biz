<!--Section Banner--->
<div>
    <div class="cover-image sptb-1 bg-background" data-image-src="<?= BASEURL; ?>/assets_dashboard/images/banner/banner1.jpg" style="background: url(&quot;<?= BASEURL; ?>/assets_dashboard/images/banner/banner1.jpg&quot;) center center;">
        <div class="header-text1 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="text-center text-white ">
                            <h1 class="mb-5"><span class="font-weight-bold">3,750 </span> Units Sewa Mobil Tersedia</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /header-text -->
    </div>
</div>
<!--End Section Banner--->
<!--Break Crump--->
<div class="bg-white border-bottom">
    <div class="container">
        <div class="page-header">
            <h4 class="page-title">Bizcar - Car Rental</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Kendaraan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
    </div>
</div>
<!--End Break Crump-->
<!--All-->
<section class="sptb" data-select2-id="64">
    <div class="container" data-select2-id="63">
        <div class="row" data-select2-id="62">
            <!-- Checkout Table -->
            <?php Flasher::flash(); ?>
            <?php foreach ($data['transaksi'] as $tk) : ?>
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Invoice Pembayaran</h3>
                        </div>
                        <div class="card-body">
                            <?php if ($tk['status_rental'] == 3) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">Pembayaran gagal, bukti pembayaran tidak sesuai. Silahkan upload ulang atau hubungi administrator bila terjadi kesalahan. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>
                            <?php } ?>
                            <div class="table-responsive">
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
                                <br>
                                <div class="col text-right">
                                    <a class="btn btn-danger mb-0" href="<?= BASEURL; ?>/pelanggan/checkout">Kembali</a>
                                    <a href="<?= BASEURL; ?>/pelanggan/cetakpembayaran/<?= $tk['id_rental']; ?>" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i> Cetak Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- End Checkout Table -->
            <!--Right Side Content-->
            <div class="col-xl-4 col-lg-4 col-md-12" data-select2-id="61">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Metode Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($data['transaksi'] as $tk) : ?>
                            <div class="card-pay">
                                <ul class="tabs-menu nav">
                                    <li class=""><a href="#tab1" class="" data-toggle="tab"><i class="fa fa-university"></i> Mandiri</a></li>
                                    <li><a href="#tab2" data-toggle="tab" class=""><i class="fa fa-university"></i> BRI</a></li>
                                    <li><a href="#tab3" data-toggle="tab" class="active"><i class="fa fa-university"></i> Lainnya</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab1">
                                        <p>Detail Akun Bank Mandiri</p>
                                        <dl class="card-text">
                                            <dt>BANK: </dt>
                                            <dd> Bank Mandiri</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nama Rekening: </dt>
                                            <dd> PT Jaya Bizcar</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nomor Rekening: </dt>
                                            <dd> 773228272930472</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nomor Transaksi: </dt>
                                            <dd class="text-primary">#000<?= $tk['id_rental']; ?></dd>
                                        </dl>
                                        <p class="mb-0"><strong>Note:</strong> Silahkan sertakan nomor transaksi pada saat pembayaran, untuk mempercepat proses verifikasi pembayaran. </p>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <p>Detail Akun Bank BRI</p>
                                        <dl class="card-text">
                                            <dt>BANK: </dt>
                                            <dd> Bank Rakyat Indonesia</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nama Rekening: </dt>
                                            <dd> PT Jaya Bizcar</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nomor Rekening: </dt>
                                            <dd> 67542897653214</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nomor Transaksi: </dt>
                                            <dd class="text-primary">#000<?= $tk['id_rental']; ?></dd>
                                        </dl>
                                        <p class="mb-0"><strong>Note:</strong> Silahkan sertakan nomor transaksi pada saat pembayaran, untuk mempercepat proses verifikasi pembayaran. </p>
                                    </div>
                                    <div class="tab-pane active" id="tab3">
                                        <p>Detail Akun Bank Lainnya</p>
                                        <dl class="card-text">
                                            <dt>BANK: </dt>
                                            <dd> Bank Central Indonesia</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nama Rekening: </dt>
                                            <dd> PT Jaya Bizcar</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nomor Rekening: </dt>
                                            <dd> 23917397653214</dd>
                                        </dl>
                                        <dl class="card-text">
                                            <dt>Nomor Transaksi: </dt>
                                            <dd class="text-primary">#000<?= $tk['id_rental']; ?></dd>
                                        </dl>
                                        <p class="mb-0"><strong>Note:</strong> Silahkan sertakan nomor transaksi pada saat pembayaran, untuk mempercepat proses verifikasi pembayaran. </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if (empty($tk['bukti_bayar'])) { ?>
                                <button style="width: 100%;" type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#update_modal<?= $tk['id_rental']; ?>">Upload Bukti Bayar</button>
                            <?php } elseif ($tk['status_rental'] == '1') { ?>
                                <button style="width: 100%;" type="button" class="btn btn-warning mt-3"><i><i class="fa fa-clock-o"></i></i> Menunggu Konfirmasi</button>
                            <?php } elseif ($tk['status_rental'] == '2') { ?>
                                <button style="width: 100%;" type="button" class="btn btn-success mt-3"><i><i class="fa fa-check"></i></i> Pembayaran berhasil dikonfirmasi</button>
                            <?php } elseif ($tk['status_rental'] == '3') { ?>
                                <button style="width: 100%;" type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#update_modal<?= $tk['id_rental']; ?>">Upload Ulang</button>
                            <?php } elseif ($tk['status_rental'] == '5') { ?>
                                <button style="width: 100%;" type="button" class="btn btn-warning mt-3"><i><i class="fa fa-clock-o"></i></i> Sedang Dirental</button>
                            <?php } elseif ($tk['status_rental'] == '6') { ?>
                                <button style="width: 100%;" type="button" class="btn btn-success mt-3"><i><i class="fa fa-check"></i></i> Transaksi Selesai</button>
                            <?php } ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
            <!-- Form Modal Upload Bukti Bayar -->
            <?php foreach ($data['transaksi'] as $tk) : ?>
                <div class="modal fade" id="update_modal<?= $tk['id_rental']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="judulModal">Upload Bukti Pembayaran</h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?= BASEURL; ?>/pelanggan/upload_bukti" method="post" enctype="multipart/form-data">
                                    <input type="hidden" class="form-control" id="id_rental" name="id_rental" value="<?= $tk['id_rental']; ?>">
                                    <div class="form-group">
                                        <label class="form-control-label" for="no_transaksi">Nomor Transaksi</label>
                                        <input type="text" class="form-control" value="#000<?= $tk['id_rental']; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="merk">Merk Kendaraan</label>
                                        <input type="text" class="form-control" value="<?= $tk['merk'] ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="tahun">Jangka Sewa</label>
                                        <input type="text" class="form-control" value="<?php
                                                                                        $rental = strtotime($tk['tanggal_rental']);
                                                                                        $kembali = strtotime($tk['tanggal_kembali']);
                                                                                        $jml = abs(($rental - $kembali) / (60 * 60 * 24));
                                                                                        echo "$jml Hari"
                                                                                        ?> (<?php echo date('d/m/Y', strtotime($tk['tanggal_rental'])); ?> - <?php echo date('d/m/Y', strtotime($tk['tanggal_kembali'])); ?>)" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="tahun">Total Pembayaran</label>
                                        <input type="text" class="form-control" value="Rp. <?php echo number_format($tk['harga'] * $jml, 0, ',', '.'); ?>" disabled>
                                    </div>
                                    <label>Upload Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input form-control" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih File</label>
                                    </div>
                                    <div class="modal-footer mt-5">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="submit" id="submit" class="btn btn-secondary">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- End Form Modal Upload Bukti Bayar -->
            <!--Section-->
            <div class="container">
                <div class="section-title center-block text-center">
                    <br><br>
                    <h2>Mobil Terbaik</h2>
                </div>
                <div id="myCarousel2" class="owl-carousel owl-carousel-icons5 owl-loaded owl-drag">
                    <!-- Wrapper for carousel items -->
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1801px, 0px, 0px); transition: all 0.25s ease 0s; width: 3904px;">
                            <?php foreach ($data['mobil'] as $mb) : ?>
                                <div class="owl-item" style="width: 275.25px; margin-right: 25px;">
                                    <div class="item <?php if ($mb['status'] == '0') echo 'sold-out' ?>">
                                        <?php if ($mb['status'] == '0') echo '<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Dipesan</span></div>' ?>
                                        <div class="card mb-0">
                                            <?php if ($mb['status'] == '1') echo '<div class="arrow-ribbon bg-secondary">' . $mb['warna'] . '</div>'; ?>
                                            <div class="item-card7-imgs"> <a class="link" <?php if ($mb['status'] == '1') echo 'href="#"' ?>></a> <img width="273.25px" height="162.46px" src="<?= BASEURL . '/foto_mobil/' . $mb['gambar'] ?>" alt="img" class="cover-image">
                                                <div class="item-tag">
                                                    <h4 class="mb-0 fs-13">Rp. <?php echo number_format($mb['harga'], 0, ',', '.'); ?></h4>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="item-card7-desc">
                                                    <div class="item-card7-text  d-flex"> <a <?php if ($mb['status'] == '1') echo 'href="#"' ?> class="text-dark">
                                                            <h4 class=""><?php echo $mb['merk'] ?></h4>
                                                        </a> </div>
                                                    <ul class="item-cards7-ic mb-0 mt-2">
                                                        <li><a class="icons"><i class="ti-car text-muted mr-1"></i><?php echo $mb['no_plat'] ?></a></li>
                                                        <li><a><span class="text-muted"><i class="icon icon-eye mr-1"></i><?php echo $mb['warna'] ?></span></a></li>
                                                        <li><a class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> <?php echo $mb['lokasi'] ?></a></li>
                                                        <li><a class="icons"><i class="icon icon-event text-muted mr-1"></i> <?php echo $mb['tahun'] ?></a></li>
                                                    </ul>
                                                    <p class="mb-0">Kendaran terbaik diproduksi tahun <?php echo $mb['tahun'] ?> kilometer <?php echo $mb['kilometer'] ?>.</p>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block <?php if ($mb['status'] == '0') echo 'disabled' ?>" href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>"> Pesan Sekarang</a> </div>
                                            </div>
                                            <div class="card-footer">
                                                <?php if ($mb['ac']  == '1') echo '<a class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="AC"><i class="fa fa-car text-muted"></i> <span class="text-default">AC</span></a>'; ?>
                                                <a class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo $mb['kilometer'] ?> Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default"><?php echo $mb['kilometer'] ?></span></a>
                                                <a class="" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo $mb['transmission'] ?>"><i class="fa fa-tachometer text-muted"></i> <span class="text-default"><?php echo $mb['transmission'] ?></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--Section-->
        </div>
    </div>
</section>
<!--End All-->