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
                <li class="breadcrumb-item active" aria-current="page">Daftar Kendaraan</li>
            </ol>
        </div>
    </div>
</div>
<!--End Break Crump-->
<section class="sptb">
    <div class="container">
        <!--Lists-->
        <div class=" mb-0">
            <div class="">
                <div class="item2-gl ">
                    <div class=" mb-0">
                        <div class="">
                            <div class="bg-white p-5 item2-gl-nav d-flex">
                                <h6 class="mb-0 mt-3 text-left">Daftar Kendaraan Bizcar</h6>
                                <ul class="nav item2-gl-menu ml-auto mt-1">
                                    <li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
                                    <li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-11">
                            <?php foreach ($data['mobil'] as $mb) : ?>
                                <?php if ($mb['status'] == '1') { ?>
                                    <div class="card overflow-hidden">
                                    <?php } else { ?>
                                        <div class="card overflow-hidden sold-out">
                                            <div class="ribbon ribbon-top-left text-danger">
                                                <span class="bg-danger">Dirental</span>
                                            </div>
                                        <?php } ?>
                                        <div class="d-md-flex">
                                            <div class="item-card9-img">
                                                <div class="item-card9-imgs"> <a class="link" <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?>></a> <img src="<?= BASEURL . '/foto_mobil/' . $mb['gambar'] ?>" alt="img" class="cover-image"> </div>
                                                <div class="item-card9-icons"> <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a> </div>
                                                <div class="item-overly-trans">
                                                    <div class="rating-stars"> <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="4">
                                                        <div class="rating-stars-container">
                                                            <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                            <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                            <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                            <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                            <div class="rating-star sm"> <i class="fa fa-star"></i> </div>
                                                        </div>
                                                    </div>
                                                    <span>
                                                        <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="bg-success mr-2"><?= $mb['kode_type']; ?></a>
                                                        <?php if ($mb['status'] == 1) { ?>
                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="bg-danger">Tersedia</a>
                                                        <?php } ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card border-0 mb-0">
                                                <div class="card-body ">
                                                    <div class="item-card9">
                                                        <div class="rating-stars"> <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3"> </div> <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="text-dark">
                                                            <h4 class="font-weight-semibold mt-1"><?= $mb['merk']; ?></h4>
                                                        </a>
                                                        <div class="item-card9-desc mb-2">
                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> <?php echo $mb['lokasi'] ?>, Indonesia</span></a>
                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> <?php echo $mb['no_plat']; ?></span></a>
                                                        </div>
                                                        <p class=" leading-tight">Kendaraan tahun produksi <?php echo $mb['tahun']; ?> dengan transmisi <?php echo $mb['transmission']; ?>, warna kendaraan <?php echo $mb['warna']; ?>. </p>
                                                    </div>
                                                </div>
                                                <div class="card-footer pr-4 pl-4 pt-4 pb-4">
                                                    <div class="item-card9-footer d-sm-flex">
                                                        <div class="item-card9-cost">
                                                            <h4 class="text-dark font-weight-bold mb-0 mt-0">Rp. <?php echo number_format($mb['harga'], 0, ',', '.'); ?></h4>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <?php if ($mb['ac']  == '1') { ?>
                                                                <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="mr-2" title="AC"><i class="fa fa-car text-muted mr-1"></i> AC</a>
                                                            <?php } ?>
                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="mr-2" title="Kilometer"><i class="fa fa-road text-muted mr-1"></i> <?php echo $mb['kilometer']; ?> Km</a>
                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="" title="Transmission"><i class="fa fa-tachometer text-muted mr-1"></i> <?php echo $mb['transmission']; ?></a>
                                                            <?php if ($mb['video_player']  == '1') { ?>
                                                                <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="mr-2" title="video_player">&nbsp;<i class="fa fa-film text-muted mr-1"></i> Video Player</a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    <?php endforeach; ?>
                                    </div>
                                    <div class="tab-pane" id="tab-12">
                                        <div class="row">
                                            <?php foreach ($data['mobil'] as $mb) : ?>
                                                <div class="col-lg-6 col-md-12 col-xl-4">
                                                    <?php if ($mb['status'] == '1') { ?>
                                                        <div class="card overflow-hidden">
                                                        <?php } else { ?>
                                                            <div class="card overlow-hidden sold-out">
                                                                <div class="ribbon ribbon-top-left text danger">
                                                                    <span class="bg-danger">Dirental</span>
                                                                </div>
                                                            <?php } ?>
                                                            <div class="item-card9-img">
                                                                <div class="arrow-ribbon bg-primary">Rp. <?php echo number_format($mb['harga'], 0, ',', '.'); ?></div>
                                                                <div class="item-card9-imgs"> <a class="link" <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?>></a> <img height="250px" src="<?= BASEURL . '/foto_mobil/' . $mb['gambar'] ?>" alt="img" class="cover-image"> </div>
                                                                <div class="item-card9-icons"> <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a> </div>
                                                                <div class="item-overly-trans">
                                                                    <div class="rating-stars"> <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
                                                                        <div class="rating-stars-container">
                                                                            <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                                            <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                                            <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                                            <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                                                            <div class="rating-star sm"> <i class="fa fa-star"></i> </div>
                                                                        </div>
                                                                    </div>
                                                                    <span>
                                                                        <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="bg-success"><?= $mb['kode_type']; ?></a>
                                                                        <?php if ($mb['status'] == 1) { ?>
                                                                            <a href="#" class="bg-danger">Tersedia</a>
                                                                        <?php } ?>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="card border-0 mb-0">
                                                                <div class="card-body ">
                                                                    <div class="item-card9"> <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="text-dark">
                                                                            <h4 class="font-weight-semibold mt-1"> <?= $mb['merk'] ?></h4>
                                                                        </a>
                                                                        <div class="item-card9-desc mb-2">
                                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> <?= $mb['lokasi']; ?>, Indonesia</span></a>
                                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="mr-4"><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> <?= $mb['no_plat']; ?></span></a>
                                                                        </div>
                                                                        <p class="mb-0 leading-tight">Kendaraan tahun produksi <?php echo $mb['tahun']; ?> dengan transmisi <?php echo $mb['transmission']; ?>, warna kendaraan <?php echo $mb['warna']; ?>. </p>
                                                                    </div>
                                                                </div>
                                                                <div class="card-footer pr-4 pl-4 pt-4 pb-4">
                                                                    <div class="item-card9-footer d-sm-flex">
                                                                        <div class="">
                                                                            <?php if ($mb['ac'] == 1) { ?>
                                                                                <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="w-50 mt-1 mb-1 float-left" title="Car type"><i class="fa fa-car  mr-1 text-muted"></i> AC</a>
                                                                            <?php } ?>
                                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="w-50 mt-1 mb-1 float-left" title="Kilometer"><i class="fa fa-road text-muted mr-1 "></i><?= $mb['kilometer']; ?> Km</a>
                                                                            <a <?php if ($mb['status'] == '0') { ?> href="#" <?php } else { ?> href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" <?php } ?> class="w-50 mt-1 mb-1 float-left" title="Transmisi"><i class="fa fa-tachometer text-muted mr-1"></i><?= $mb['transmission']; ?></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <!--/Lists-->
                </div>
</section>