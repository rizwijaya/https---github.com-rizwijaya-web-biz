<!--Section-->
<div>
  <div class="cover-image sptb-1 bg-background" data-image-src="<?= BASEURL; ?>/assets_dashboard/images/banner/banner1.jpg" style="background: url(&quot;<?= BASEURL; ?>/assets_dashboard/images/banner/banner1.jpg&quot;) center center;">
    <div class="header-text1 mb-0">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 col-lg-7 col-md-12">
            <div class="text-white mt-lg-7 mb-5">
              <h1 class="mb-3 display-3">Pesan <span class="font-weight-bold">Kendaraan Anda</span><br>Untuk Perjalanan Aman</h1>
              <p class="fs-18 mb-6">Nikmati perjalanan nyaman dan aman dengan kendaraan impian anda.</p><a href="<?= BASEURL; ?>/home/login" class="btn btn-primary btn-lg mr-2">Masuk</a> <a href="<?= BASEURL; ?>/home/register" class="btn btn-success btn-lg">Daftar Sekarang</a>
            </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-12">
            <div class="card mb-0 shadow-none">
              <div class="card-body">
                <h3 class="mb-4">Cari Kendaraan</h3>
                <hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
                <form method="POST" action="<?= BASEURL; ?>/Home/cari" tabindex="500">
                  <div class="form-group search-cars1">
                    <select id="kendaraan" name="kendaraan" required="" class="form-control select2-show-search border-bottom-0 w-100 br-3 select2-hidden-accessible" data-placeholder="Select" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <optgroup label="Categories" data-select2-id="9998">
                        <option value="pilih" data-select2-id="1">Pilih Kendaraan</option>
                        <?php foreach ($data['mobil'] as $mb) : ?>
                          <option value="<?= $mb['id_mobil'] ?>" data-select2-id="<?= $mb['id_mobil'] ?>"><?= $mb['merk'] ?></option>
                        <?php endforeach; ?>
                      </optgroup>
                    </select>
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fa fa-map-marker fs-16 lh-0 op-6"></i> </div>
                    </div>
                    <input type="text" class="form-control" id="text" placeholder="Lokasi Pengambilan">
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fa fa-map-marker fs-16 lh-0 op-6"></i> </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Lokasi Pengembalian">
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <div class="input-group-text"> <i class="fa fa-calendar fs-11 lh-0 op-6"></i> </div>
                    </div>
                    <input type="text" class="form-control pull-right" id="reservationtime">
                  </div>
                  <button id="submit" type="submit" value="submit" class="submit btn btn-primary btn-block">Pesan Kendaraan</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /header-text -->
  </div>
</div>
<!--Section-->
<!--Featured Products-->
<section class="sptb bg-patterns bg-white">
  <div class="container">
    <div class="section-title center-block text-center">
      <h2>Produk Pilihan</h2>
      <p>Produk Pilihan oleh banyak pengguna bizcar</p>
    </div>
    <div id="feature-carousel" class="owl-carousel owl-carousel-icons auction-content owl-loaded owl-drag">
      <div class="owl-stage-outer">
        <div class="owl-stage" style="transform: translate3d(-2001px, 0px, 0px); transition: all 0.25s ease 0s; width: 4404px;">
          <?php foreach ($data['mobil'] as $mb) : ?>
            <div class="owl-item" style="width: 375.333px; margin-right: 25px;">
              <div class="item <?php if ($mb['status'] == '0') echo 'sold-out' ?>">
                <?php if ($mb['status'] == '0') echo '<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Dipesan</span></div>' ?>
                <div class="card mb-0">
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
      <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
      <div class="owl-dots disabled"></div>
    </div>
  </div>
</section>
<!--/Featured Products-->
<!--Section-->
<section class="sptb bg-8">
  <div class="container">
    <div class="section-title center-block text-center">
      <h2>Merek Kendaraan Teratas</h2>
      <p>Terdapat banyak merek kendaraan teratas yang kami sediakan.</p>
    </div>
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
        <div class="card bg-card mb-lg-0">
          <div class="card-body">
            <div class="cat-item text-center"> <a href="#"></a>
              <div class="cat-img text-shadow1"> <img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/28.png" alt="img" class="cover-image h-8 w-8"> </div>
              <div class="cat-desc">
                <h5 class="mb-1">Wolf</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
        <div class="card bg-card mb-lg-0">
          <div class="card-body">
            <div class="cat-item text-center"> <a href="#"></a>
              <div class="cat-img text-shadow1"> <img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/53.png" alt="img" class="cover-image h-8 w-8"> </div>
              <div class="cat-desc">
                <h5 class="mb-1">Herkimer</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
        <div class="card bg-card mb-md-0">
          <div class="card-body">
            <div class="cat-item text-center"> <a href="#"></a>
              <div class="cat-img text-shadow1"> <img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/33.png" alt="img" class="cover-image h-8 w-8"> </div>
              <div class="cat-desc">
                <h5 class="mb-1">Quibusdam</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
        <div class="card bg-card mb-md-0">
          <div class="card-body">
            <div class="cat-item text-center"> <a href="#"></a>
              <div class="cat-img text-shadow1"> <img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/30.png" alt="img" class="cover-image h-8 w-8"> </div>
              <div class="cat-desc">
                <h5 class="mb-1">Hyundai</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
        <div class="card bg-card mb-sm-0">
          <div class="card-body">
            <div class="cat-item text-center"> <a href="#"></a>
              <div class="cat-img text-shadow1"> <img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/34.png" alt="img" class="cover-image h-8 w-8"> </div>
              <div class="cat-desc">
                <h5 class="mb-1">Tortoise</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
        <div class="card bg-card mb-0">
          <div class="card-body">
            <div class="cat-item text-center"> <a href="#"></a>
              <div class="cat-img text-shadow1"> <img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/42.png" alt="img" class="cover-image h-8 w-8"> </div>
              <div class="cat-desc">
                <h5 class="mb-1">Mitsubishi</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Section-->
<!--Call to action-->
<section>
  <div class="about-1 cover-image sptb bg-background-color text-white" data-image-src="<?= BASEURL; ?>/assets_dashboard/images/banner/banner2.jpg" style="background: url(&quot;<?= BASEURL; ?>/assets_dashboard/images/banner/banner2.jpg&quot;) center center;">
    <div class="content-text mb-0">
      <div class="container">
        <div class="section-title center-block text-center">
          <h2>Apa itu Jasa Rental Bizcar?</h2>
          <p class="text-white-50">Bizcar adalah Layanan Rental Kendaraan Murah dan Aman di Indonesia. </p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p class="fs-16"> Kami Hadir menjadi pilihan yang terbaik dalam solusi transportasi anda. Tenaga sopir yang ramah dan sangat terampil di bidangnya, membuat anda akan selalu merasa nyaman bersama Rental Bizcar juga menetapkan harga yang sangat bersahabat. Terdapat juga berbagai varian kendaraan seperti berikut.</p>
            <ul class="list-group mb-4">
              <li class="mt-1 mb-2 fs-16"><i class="fa fa-angle-right mr-1" aria-hidden="true"></i> Mobil Classic</li>
              <li class="mt-1 mb-2 fs-16"><i class="fa fa-angle-right mr-1" aria-hidden="true"></i> Mobil Sports</li>
              <li class="mt-1 mb-2 fs-16"><i class="fa fa-angle-right mr-1" aria-hidden="true"></i> Mobil Towing</li>
              <li class="mt-1 mb-2 fs-16"><i class="fa fa-angle-right mr-1" aria-hidden="true"></i> Mobil Mini</li>
            </ul> <a class="btn btn-primary btn-lg" href="<?= BASEURL; ?>/home/login">Masuk</a> <a class="btn btn-success btn-lg" href="<?= BASEURL; ?>/home/register">Daftar Sekarang</a>
          </div>
          <div class="col-lg-6">
            <div class="border-5 br-7 mt-5 mt-lg-0">
              <div class="owl-carousel testimonial-owl-carousel3 owl-loaded owl-drag">
                <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(-1773px, 0px, 0px); transition: all 0.25s ease 0s; width: 4137px;">
                    <div class="owl-item cloned" style="width: 566px; margin-right: 25px;">
                      <div class="item"> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h2.jpg" alt="img"> </div>
                    </div>
                    <div class="owl-item cloned" style="width: 566px; margin-right: 25px;">
                      <div class="item"> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h3.jpg" alt="img"> </div>
                    </div>
                    <div class="owl-item" style="width: 566px; margin-right: 25px;">
                      <div class="item"> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h1.jpg" alt="img"> </div>
                    </div>
                    <div class="owl-item active" style="width: 566px; margin-right: 25px;">
                      <div class="item"> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h2.jpg" alt="img"> </div>
                    </div>
                    <div class="owl-item" style="width: 566px; margin-right: 25px;">
                      <div class="item"> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h3.jpg" alt="img"> </div>
                    </div>
                    <div class="owl-item cloned" style="width: 566px; margin-right: 25px;">
                      <div class="item"> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h1.jpg" alt="img"> </div>
                    </div>
                    <div class="owl-item cloned" style="width: 566px; margin-right: 25px;">
                      <div class="item"> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h2.jpg" alt="img"> </div>
                    </div>
                  </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Call to action-->
<!--Section-->
<section class="sptb bg-patterns bg-white">
  <div class="container">
    <div class="section-title center-block text-center">
      <h2>Mobil Terbaik</h2>
      <p>Mobil terbaik yang kami sediakan, performa mobil maksimal.</p>
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
</section>
<!--Section-->