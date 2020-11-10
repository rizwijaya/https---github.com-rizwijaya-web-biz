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
                <li class="breadcrumb-item active" aria-current="page">Detail Kendaraan</li>
            </ol>
        </div>
    </div>
</div>
<!--End Break Crump-->
<!--Image Detail--->
<section class="sptb" data-select2-id="64">
    <div class="container" data-select2-id="63">
        <div class="row" data-select2-id="62">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <!--Classified Description-->
                <?php foreach ($data['detail'] as $dt) : ?>
                <div class="card overflow-hidden">
                    <div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">Tersedia</span></div>
                    <div class="card-body">
                        <div class="item-det mb-4"> <a href="#" class="text-dark">
                                <h3><?php echo $dt['merk'] ?></h3>
                            </a>
                            <div class=" d-flex">
                                <ul class="d-flex mb-0">
                                    <li class="mr-5"><a href="#" class="icons"><i class="ti-car text-muted mr-1 fs-18"></i> <?php echo $dt['no_plat'] ?></a></li>
                                    <li class="mr-5"><a href="#" class="icons"><i class="ti-location-pin text-muted mr-1"></i> <?php echo $dt['lokasi'] ?></a></li>
                                    <li class="mr-5"><a href="#" class="icons"><i class="ti-calendar text-muted mr-1"></i> <?php echo $dt['tahun'] ?></a></li>
                                    <li class="mr-5"><a href="#" class="icons"><i class="ti-eye text-muted mr-1 fs-15"></i> <?php echo $dt['warna'] ?></a></li>
                                </ul>
                                <div class="rating-stars d-flex mr-5"> <input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" id="rating-stars-value" value="4">
                                    <div class="rating-stars-container mr-2">
                                        <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star sm is--active"> <i class="fa fa-star"></i> </div>
                                        <div class="rating-star sm"> <i class="fa fa-star"></i> </div>
                                    </div> Rating
                                </div>
                                <div class="rating-stars d-flex">
                                    <div class="rating-stars-container mr-2">
                                        <div class="rating-star sm"> <i class="fa fa-heart"></i> </div>
                                    </div> Likes
                                </div>
                            </div>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active"> <img width="726px" src="<?= BASEURL . '/foto_mobil/' . $dt['gambar'] ?>" alt="img"> </div>
                        </div>
                    </div>
                </div>
                <!--Deskripsi Kendaraan--->
                <div class="">
                    <div class="">
                        <div class="border-0">
                            <div class="wideget-user-tab wideget-user-tab3">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <ul class="nav">
                                            <li class=""><a href="#tab-1" class="active" data-toggle="tab">Informasi</a></li>
                                            <li><a href="#tab-3" data-toggle="tab" class="">Fasilitas</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content border-left border-right border-top br-tr-3 p-5 bg-white">
                                <div class="tab-pane active" id="tab-1">
                                    <h3 class="card-title mb-3 font-weight-semibold">Informasi Kendaraan</h3>
                                    <div class="mb-4">
                                        <p>Mobil <?php echo $dt['merk'] ?> merupakan kendaraan tipe <?php echo $dt['nama_type'] ?> memiliki peforma yang luar biasa, cocok digunakan dengan keluarga. Kondisi mesin terawat dengan perawatan dan pengecekan yang rutin dan tentunya pajak aktif beserta surat yang lengkap.</p>
                                        <p><?php echo $dt['merk'] ?> diproduksi pada tahun <?php echo $dt['tahun'] ?> dilengkapi dengan berbagai fasilitas yang lengkap dan pastinya aman, memberikan anda perjalanan yang aman dan nyaman serta tidak perlu khawatir bila kendaraan macet ditengah jalan, karena pada kendaraan selalu dilakukan pengecekan sebelum berangkat.</p>
                                    </div>
                                    <h4 class="mb-4">Spesifikasi</h4>
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-bordered w-100 m-0 text-nowrap ">
                                                    <tbody>
                                                        <tr>
                                                            <td><span class="font-weight-bold">Transmisi :</span> <?php echo $dt['transmission'] ?></td>
                                                            <td><span class="font-weight-bold">Rem :</span> Depan , Belakang</td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="font-weight-bold">Kapasitas :</span> 5 - 8 Orang</td>
                                                            <td><span class="font-weight-bold">Nomor Plat :</span> <?php echo $dt['no_plat'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="font-weight-bold">Tipe Kendaraan :</span> <?php echo $dt['nama_type'] ?></td>
                                                            <td><span class="font-weight-bold">Warna :</span> <?php echo $dt['warna'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="font-weight-bold">Tahun Produksi :</span> <?php echo $dt['tahun'] ?> </td>
                                                            <td><span class="font-weight-bold">Jarak Tempuh :</span> <?php echo $dt['kilometer'] ?> Km</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="table-responsive">
                                                <table class="table table-bordered border-top mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Power Steering</td>
                                                            <td><i class="icon icon-check text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Power Windows Front</td>
                                                            <td><i class="icon icon-check text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Air Conditioner</td>
                                                            <td><i class="icon icon-<?php if($dt['ac'] == 1)  { 
                                                                echo 'check text-success';
                                                            } else {
                                                                echo 'close text-danger';
                                                            } ?>"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Passenger Airbag</td>
                                                            <td><i class="icon icon-check text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fog Lights - Front</td>
                                                            <td><i class="icon icon-check text-success"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="table-responsive">
                                                <table class="table table-bordered border-top mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>Anti Lock Braking System</td>
                                                            <td><i class="icon icon-<?php if($dt['anti_lock'] == 1)  { 
                                                                echo 'check text-success';
                                                            } else {
                                                                echo 'close text-danger';
                                                            } ?>"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Driver Airbag</td>
                                                            <td><i class="icon icon-check text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Music Player</td>
                                                            <td><i class="icon icon-<?php if($dt['music_player'] == 1)  { 
                                                                echo 'check text-success';
                                                            } else {
                                                                echo 'close text-danger';
                                                            } ?>"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Video Player</td>
                                                            <td><i class="icon icon-<?php if($dt['video_player'] == 1)  { 
                                                                echo 'check text-success';
                                                            } else {
                                                                echo 'close text-danger';
                                                            } ?>"></i></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-left border-right border-bottom br-br-3 br-bl-3">
                                <div class="icons"> <a href="#" class="btn btn-danger icons"><i class="icon icon-cloud-download mr-1"></i> Pesan Sekarang</a> 
                                <a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share Ad</a> 
                                <a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i> Print</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!--/Classified Description-->
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
                        <h3 class="card-title">Kata Kunci</h3>
                    </div>
                    <?php foreach ($data['detail'] as $dt) : ?>
                    <div class="card-body product-filter-desc">
                        <div class="product-tags clearfix">
                            <ul class="list-unstyled mb-0">
                                <li><a href=""><?php echo $dt['merk'] ?></a></li>
                                <li><a href=""><?php echo $dt['warna'] ?></a></li>
                                <li><a href=""><?php echo $dt['nama_type'] ?></a></li>
                                <li><a href=""><?php echo $dt['transmission'] ?></a></li>
                                <li><a href=""><?php echo $dt['tahun'] ?></a></li>
                                <?php if($mb['ac']  == '1' ) echo '<li><a href="">AC</a></li>' ?>
                                <li><a href="">Vehicles</a></li>
                                <?php if($mb['video_player']  == '1' ) echo '<li><a href="">Video Player</a></li>' ?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
                                                <h5 class="mb-1 "><?php echo $mb['merk']; ?></h5><a href="<?= BASEURL; ?>/home/detail/<?= $mb['id_mobil'] ?>" class="btn-link">View Details</a><span class="float-right font-weight-bold">Rp. <?php echo number_format($mb['harga'],0,',','.'); ?></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-header">
                        <h3 class="card-title">Mobil Terlaris</h3>
                    </div>
                    <div class="card-body">
                        <div class="rated-products">
                            <ul class="vertical-scroll" style="overflow-y: hidden; height: 488px;">
                            <?php foreach ($data['mobil'] as $mb) : ?>
                                <li class="item">
                                    <div class="media  mb-0 p-5 mt-0"> <img class=" mr-4" src="<?= BASEURL . '/foto_mobil/' . $mb['gambar'] ?>" alt="mobil">
                                        <div class="media-body">
                                            <h4 class="mt-2 mb-1"><?php echo $mb['merk']; ?></h4> 
                                            <span class="rated-products-ratings"> 
                                                <i class="fa fa-star text-warning"> </i> 
                                                <i class="fa fa-star text-warning"> </i> 
                                                <i class="fa fa-star text-warning"> </i> 
                                                <i class="fa fa-star-o text-warning"> </i> 
                                                <i class="fa fa-star-o text-warning"> </i> 
                                            </span>
                                            <div class="h5 mb-0 font-weight-semibold mt-1">Rp. <?php echo number_format($mb['harga'],0,',','.'); ?></div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>
<!--End Image Detail--->