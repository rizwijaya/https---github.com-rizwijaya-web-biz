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
            <div class="col-xl-9 col-lg-9 col-md-12">
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
                                        <th>Order Id</th>
                                        <th>Kendaraan</th>
                                        <th>Harga Sewa</th>
                                        <th>Denda</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  foreach ($data['transaksi'] as $tk) : ?>
                                        <tr>
                                        <td class="text-primary"> #000<?= $tk['id_rental'] ?></td>
                                        <td>
                                            <div class="media mt-0 mb-0">
                                                <div class="card-aside-img"><img src="<?= BASEURL . '/foto_mobil/' . $tk['gambar'] ?>" alt="img"> </div>
                                                <div class="media-body">
                                                    <div class="card-item-desc ml-4 p-0 mt-0"> <a class="text-dark">
                                                            <h4 class="font-weight-semibold"><?= $tk['merk'] ?></h4>
                                                        </a> <a><i class="fa fa-tag mr-1"></i><?= $tk['no_plat'] ?></a><br> <a><i class="fa fa-clock-o mr-1"></i> <?php echo date('d/m/Y', strtotime($tk['tanggal_rental'])); ?></a></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Rp. <?php echo number_format($tk['harga'], 0, ',', '.'); ?></td>
                                        <td class="text-primary">Rp. <?php echo number_format($tk['denda'], 0, ',', '.'); ?></td>
                                       <td> <?php if ($tk['status_rental'] == 5) { ?>
                                            <div class="btn btn-success">Rental Selesai</div>
                                        <?php } else { ?>
                                            <a href="<?= BASEURL; ?>/pelanggan/pembayaran/<?= $tk['id_rental'] ?>" class="btn btn-outline-warning">Pembayaran</a>
                                        <?php } ?> </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Checkout Table -->
            </div>
            <!--Right Side Content-->
            <div class="col-xl-3 col-lg-3 col-md-12" data-select2-id="61">
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
            </div>
            <!--/Right Side Content-->
            <!--Section-->
            <div class="container">
        <div class="section-title center-block text-center">
          <h2>Mobil Terbaik</h2>
          <p>Mobil terbaik yang kami sediakan, performa mobil maksimal.</p>
        </div>
        <div id="myCarousel2" class="owl-carousel owl-carousel-icons5 owl-loaded owl-drag">
          <!-- Wrapper for carousel items -->
          <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-1801px, 0px, 0px); transition: all 0.25s ease 0s; width: 3904px;">
            <?php foreach($data['mobil'] as $mb) : ?>
              <div class="owl-item" style="width: 275.25px; margin-right: 25px;">
                <div class="item <?php if($mb['status'] == '0') echo 'sold-out' ?>">
                  <?php if($mb['status'] == '0') echo '<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Dipesan</span></div>' ?>
                  <div class="card mb-0">
                  <?php if($mb['status'] == '1') echo '<div class="arrow-ribbon bg-secondary">'.$mb['warna'].'</div>'; ?>
                    <div class="item-card7-imgs"> <a class="link" <?php if($mb['status'] == '1') echo 'href="#"' ?>></a> <img width="273.25px" height="162.46px" src="<?= BASEURL . '/foto_mobil/' . $mb['gambar'] ?>" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">Rp. <?php echo number_format($mb['harga'],0,',','.'); ?></h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text  d-flex"> <a <?php if($mb['status'] == '1') echo 'href="#"' ?> class="text-dark">
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
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block <?php if($mb['status'] == '0') echo 'disabled' ?>" href="#"> Pesan Sekarang</a> </div>
                    </div>
                    <div class="card-footer"> 
                    <?php if($mb['ac']  == '1' ) echo '<a class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="AC"><i class="fa fa-car text-muted"></i> <span class="text-default">AC</span></a>'; ?> 
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