<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-TileColor" content="#162946">
  <meta name="theme-color" content="#e72a1a">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="Duplex VehiclesOptimized" content="320">
  <link rel="icon" href="<?= BASEURL; ?>/assets_dashboard/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" type="image/x-icon" href="<?= BASEURL; ?>/assets_dashboard/favicon.ico">
  <!-- Title -->
  <title>Bizcar - Vehicle Rental</title>
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
  <div class="horizontalMenucontainer">
    <!--Loader-->
    <div id="global-loader" style="display: none;"> <img src="<?= BASEURL; ?>/assets_dashboard/images/photo/loader.svg" class="loader-img " alt=""> </div>
    <!--Topbar-->
    <div class="header-main">
      <!-- Horizontal Header -->
      <div id="sticky-wrapper" class="sticky-wrapper" style="height: 34.2812px;">
        <div class="horizontal-header clearfix " style="width: 1343px;">
          <div class="container"> <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a> <span class="smllogo"><img src="<?= BASEURL; ?>/assets_dashboard/images/photo/logo.png" width="120" alt=""></span> <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a> </div>
        </div>
      </div> <!-- /Horizontal Header -->
      <!-- Horizontal Main -->
      <div id="sticky-wrapper" class="sticky-wrapper" style="height: 88px;">
        <div class="horizontal-main horizontal-main bg-dark-transparent clearfix" style="width: 1343px;">
          <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo"> <a href="#"><img src="<?= BASEURL; ?>/assets_dashboard/images/photo/logo1.png" alt=""></a> </div>
            <div class="desktoplogo-1"> <a href="#"><img src="<?= BASEURL; ?>/assets_dashboard/images/photo/logo.png" alt=""></a> </div>
            <!--Nav-->
            <nav class="horizontalMenu clearfix d-md-flex">
              <div class="outsidebg"></div>
              <ul class="horizontalMenu-list">
              <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="<?= BASEURL ?>/home/">Home</a>
                <li aria-haspopup="true"><a href="<?= BASEURL ?>/dashboard">Admin</a></li>
                <li aria-haspopup="true"><a href="#">Sewa</a></li>
                <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Type</a></li>
                <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="#">Kendaraan <span class="fa fa-caret-down m-0"></span></a>
                  <div class="horizontal-megamenu clearfix car-brands">
                    <div class="container">
                      <div class="megamenu-content overflow-hidden">
                        <div class="row">
                          <ul class="col-lg-6 link-list">
                            <li class="title">Car Body Shapes</li>
                            <li>
                              <div class="row">
                                <div class="col-xl-4 col-md-6 text-center"> <a href="#"><img src="<?= BASEURL; ?>/assets_dashboard/images/CarHead/1.png" alt=""></a>
                                  <h4 class="mb-0 font-weight-bold text-uppercase">Convertible</h4>
                                </div>
                                <div class="col-xl-4 col-md-6 text-center"> <a href="#"><img src="<?= BASEURL; ?>/assets_dashboard/images/CarHead/2.png" alt=""></a>
                                  <h4 class="mb-0 font-weight-bold text-uppercase">Coupe</h4>
                                </div>
                                <div class="col-xl-4 col-md-6 text-center"> <a href="#"><img src="<?= BASEURL; ?>/assets_dashboard/images/CarHead/3.png" alt=""></a>
                                  <h4 class="mb-0 font-weight-bold text-uppercase">Ringer Ace</h4>
                                </div>
                                <div class="col-xl-4 col-md-6 text-center"> <a href="#"><img src="<?= BASEURL; ?>/assets_dashboard/images/CarHead/4.png" alt=""></a>
                                  <h4 class="mb-0 font-weight-bold text-uppercase">Van/minivan</h4>
                                </div>
                                <div class="col-xl-4 col-md-6 text-center"> <a href="#"><img src="<?= BASEURL; ?>/assets_dashboard/images/CarHead/5.png" alt=""></a>
                                  <h4 class="mb-0 font-weight-bold text-uppercase">Truck</h4>
                                </div>
                                <div class="col-xl-4 col-md-6 text-center"> <a href="#"><img src="<?= BASEURL; ?>/assets_dashboard/images/CarHead/6.png" alt=""></a>
                                  <div class="clearfix"></div>
                                  <h4 class="mb-0 font-weight-bold text-uppercase">Hybrid</h4>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <ul class="col-lg-6 link-list mt-3 mt-md-0 top-brands">
                            <li class="title">Top Car Brands</li>
                            <li class="mt-4">
                              <div class="row">
                                <div class="col-lg col-sm-6">
                                  <div class="card border-2 box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/28.png" class="w-80" alt=""></a> </div>
                                </div>
                                <div class="col-lg col-sm-6">
                                  <div class="card border-2 mx-auto box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/53.png" class="w-80" alt=""></a> </div>
                                </div>
                                <div class="col-lg col-sm-6">
                                  <div class="card border-2 mx-auto box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/42.png" class="w-80" alt=""></a> </div>
                                </div>
                                <div class="col-lg col-sm-6">
                                  <div class="card border-2 mx-auto box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/34.png" class="w-80" alt=""></a> </div>
                                </div>
                                <div class="col-lg col-sm-12">
                                  <div class="card border-2 mx-auto box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/30.png" class="w-80" alt=""></a> </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg col-sm-6">
                                  <div class="card border-2 d-block box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/51.png" class="w-80" alt=""></a> </div>
                                </div>
                                <div class="col-lg col-sm-6">
                                  <div class="card border-2 mx-auto box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/26.png" class="w-80" alt=""></a> </div>
                                </div>
                                <div class="col-lg col-sm-6">
                                  <div class="card border-2 mx-auto box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/31.png" class="w-80" alt=""></a> </div>
                                </div>
                                <div class="col-lg col-sm-6">
                                  <div class="card border-2 mx-auto box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/01.png" class="w-80" alt=""></a> </div>
                                </div>
                                <div class="col-lg col-sm-12">
                                  <div class="card border-2 mx-auto box-shadow2"> <a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="<?= BASEURL; ?>/assets_dashboard/images/logosBrand/41.png" class="w-80" alt=""></a> </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php if(!isset($_SESSION['id_user'])) : ?>
                </li>
                <li aria-haspopup="true"><span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span><a href="<?= BASEURL ?>/home/register">Register</a>
                </li>
                <li aria-haspopup="true"><a href="<?= BASEURL ?>/home/login"> Login <span class="horizontalarrow"></span></a></li>
                <?php else : ?>
                  <li aria-haspopup="true"><a href="<?= BASEURL ?>/users/logout"> Logout <span class="horizontalarrow"></span></a></li>    
                <?php endif; ?>
              </ul>
              <ul class="mb-0">
                <li aria-haspopup="true" class="mt-5 d-none d-lg-block "> <span><a class="btn btn-green ad-post " href="#"><i class="fa fa-car text-white mr-1"></i> Cari Kendaraan</a></span> </li>
              </ul>
            </nav>
            <!--Nav-->
          </div>
        </div>
      </div> 
      <!-- /Horizontal Main -->
    </div>
</div>
    <!--Topbar-->