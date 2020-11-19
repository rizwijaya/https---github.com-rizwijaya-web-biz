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
                        <div class="search-background mt-3">
                            <div class="form row no-gutters">
                                <div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0"> <input type="text" class="form-control input-lg" id="text" placeholder="Masukan lokasi">
                                </div>
                                <div class="form-group col-xl-4 col-lg-4 select2-lg  col-md-12 mb-0">
                                    <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <optgroup label="Categories" data-select2-id="12">
                                            <option data-select2-id="3">Pilih Kendaraan</option>
                                            <option value="1" data-select2-id="13">Lamborghini</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0"> <a href="#" class="btn btn-lg btn-block btn-primary br-bl-0 br-tl-0">Search</a> </div>
                            </div>
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
            <div class="col-xl-8 col-lg-8 col-md-12">
                <!-- Checkout Table -->
                <?php Flasher::flash(); ?>
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Data Transaksi Anda</h3>
                    </div>
                    <div class="card-body">
                        <div class="manged-ad table-responsive border-top userprof-tab">
                            <table class="table table-bordered table-hover mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kendaraan</th>
                                        <th>Plat Nomor</th>
                                        <th>Harga Sewa</th>
                                        <th>Denda</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($data['transaksi'] as $tk) : ?>
                                        <tr>
                                        <td> <?php echo $no++ ?> </td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="card-aside-img"><img src="<?= BASEURL . '/foto_mobil/' . $tk['gambar'] ?>" alt="img"> </div>
                                                <div class="media-body">
                                                    <div class="card-item-desc ml-4 p-0 mt-0"> <a class="text-dark">
                                                            <h4 class="font-weight-semibold"><?= $tk['merk'] ?></h4>
                                                        </a> <a><i class="fa fa-clock-o mr-1"></i> <?= $tk['tanggal_rental'] ?></a><br><a><i class="fa fa-tag mr-1"></i><?= $tk['tanggal_kembali'] ?></a> </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $tk['no_plat'] ?></td>
                                        <td>Rp. <?php echo number_format($tk['harga'], 0, ',', '.'); ?></td>
                                        <td class="text-primary">Rp. <?php echo number_format($tk['denda'], 0, ',', '.'); ?></td>
                                        <td> <a href="#" class="badge badge-primary">Bayar Sekarang</a> </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Checkout Table -->
                <h3 class="mb-5 mt-6">Produk Pilihan</h3>
                <!--Related Posts-->
                <div id="myCarousel5" class="owl-carousel owl-carousel-icons3 owl-loaded owl-drag">
                    <!-- Wrapper for carousel items -->
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-2403px, 0px, 0px); transition: all 0.25s ease 0s; width: 4406px;">
                            <?php foreach ($data['mobil'] as $mb) : ?>
                                <div class="owl-item" style="width: 375.333px; margin-right: 25px;">
                                    <div class="item <?php if ($mb['status'] == '0') echo 'sold-out' ?>">
                                        <?php if ($mb['status'] == '0') echo '<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Dipesan</span></div>' ?>
                                        <div class="card">
                                            <div class="item-card2-img"> <a class="link" <?php if ($mb['status'] == '1') echo 'href="#"' ?>></a> <img width="373.33px" height="221.98px" src="<?= BASEURL . '/foto_mobil/' . $mb['gambar'] ?>" alt="img" class="cover-image">
                                                <?php if ($mb['status'] == '1') echo '<div class="item-tag-overlaytext"> <span class="text-white bg-success"> Tersedia</span> </div>' ?>
                                                <div class="item-card2-icons"> <a class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a> <a class="item-card2-icons-r wishlist active"><i class="fa fa fa-heart"></i></a> </div>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="item-card2">
                                                    <div class="item-card2-desc">
                                                        <div class="item-card2-text"> <a <?php if ($mb['status'] == '1') echo 'href="#"' ?> class="text-dark">
                                                                <h4 class="mb-0"><?php echo $mb['merk']; ?></h4>
                                                            </a> </div>
                                                        <div class="d-flex pb-0 pt-0"> <a <?php if ($mb['status'] == '1') echo 'href="#"' ?>>
                                                                <p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i><?php echo $mb['lokasi'] ?>, Indonesia</p>
                                                            </a> <span class="ml-3 pb-0 pt-0 mb-2 mt-2 font-weight-bold"><?php echo $mb['no_plat']; ?></span> </div>
                                                        <p class="">Kendaraan tahun produksi <?php echo $mb['tahun']; ?> dengan transmisi <?php echo $mb['transmission']; ?>, warna kendaraan <?php echo $mb['warna']; ?>. </p>
                                                    </div>
                                                </div>
                                                <div class="item-card2-footer mt-4 mb-4">
                                                    <div class="item-card2-footer-u">
                                                        <div class="d-md-flex"> <span class="review_score mr-2 badge badge-primary">Rp. <?php echo number_format($mb['harga'], 0, ',', '.'); ?></span>
                                                            <div class="rating-stars d-inline-flex ml-auto"> <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                                    <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                                    <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                                    <div class="rating-star sm"> <i class="fa fa-star"></i> </div>
                                                                    <div class="rating-star sm"> <i class="fa fa-star"></i> </div>
                                                                </div> (5 Reviews)
                                                            </div>
                                                        </div>
                                                    </div> <a class="btn btn-primary btn-block mt-3 <?php if ($mb['status'] == '0') echo 'disabled' ?>" href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>">Pesan Sekarang</a>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <?php if ($mb['ac']  == '1') echo '<a class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="AC"><i class="fa fa-car text-muted"></i> <span class="text-default">AC</span></a>'; ?>
                                                <a class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo $mb['kilometer']; ?> Kilometers"><i class="fa fa-road text-muted"></i> <span class="text-default"><?php echo $mb['kilometer']; ?></span></a>
                                                <a class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo $mb['transmission']; ?>"><i class="fa fa-tachometer text-muted"></i> <span class="text-default"><?php echo $mb['transmission']; ?></span></a>
                                                <?php if ($mb['video_player']  == '1') echo '<a class="" data-toggle="tooltip" data-placement="bottom" data-original-title="Video Player"><i class="fa fa-film text-muted"></i> <span class="text-default">Video Player</span></a>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                        <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
                <!--/Related Posts-->
            </div>
            <!--Right Side Content-->
            <div class="col-xl-4 col-lg-4 col-md-12" data-select2-id="61">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4">Pesan Kendaraan</h3>
                        <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                        <div class="form-group search-cars1"> <select class="form-control select2-show-search border-bottom-0 w-100 br-3 select2-hidden-accessible" data-placeholder="Select" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                <optgroup label="Categories" data-select2-id="24">
                                    <option data-select2-id="6">Pilih Mobil</option>
                                    <option value="1" data-select2-id="25">Lamborghini</option>
                                    <option value="2" data-select2-id="26">Tarragon</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text"> <i class="fa fa-map-marker fs-16 lh-0 op-6"></i> </div>
                            </div> <input type="text" class="form-control" placeholder="Pickup location">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text"> <i class="fa fa-map-marker fs-16 lh-0 op-6"></i> </div>
                            </div> <input type="text" class="form-control" placeholder="Drop location">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text"> <i class="fa fa-calendar fs-11 lh-0 op-6"></i> </div>
                            </div> <input type="text" class="form-control pull-right" id="reservationtime">
                        </div> <a class="btn btn-primary btn-lg btn-block" href="#">Pesan Sekarang</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kenapa memilih Jasa Bizcar</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled widget-spec  mb-0">
                            <li class=""> <i class="fa fa-check text-success" aria-hidden="true"></i> Perawatan rutin pada Kendaraan </li>
                            <li class=""> <i class="fa fa-check text-success" aria-hidden="true"></i> Harga terjangkau, kualitas luar biasa </li>
                            <li class=""> <i class="fa fa-check text-success" aria-hidden="true"></i> Berpengalaman selama 10 tahun </li>
                            <li class=""> <i class="fa fa-check text-success" aria-hidden="true"></i> Siap sedia, kapanpun dibutuhkan </li>
                            <li class=""> <i class="fa fa-check text-success" aria-hidden="true"></i> Sopir berpengalaman dibidangnya </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Mobil Terbaru</div>
                    </div>
                    <div class="card-body ">
                        <ul class="vertical-scroll" style="overflow-y: hidden; height: 264px;">
                            <?php foreach ($data['mobil'] as $mb) : ?>
                                <li class="news-item">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img width="64px" height="53.66px" src="<?= BASEURL . '/foto_mobil/' . $mb['gambar'] ?>" alt="mobil" class="w-8 border"></td>
                                                <td class="pl-3">
                                                    <h5 class="mb-1 "><?php echo $mb['merk']; ?></h5><a href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" class="btn-link">View Details</a><span class="float-right font-weight-bold">Rp. <?php echo number_format($mb['harga'], 0, ',', '.'); ?></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>
<!--End All-->