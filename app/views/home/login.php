<!--Section Banner--->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="<?= BASEURL; ?>/assets_dashboard/images/banner/banner2.jpg" style="background: url(&quot;<?= BASEURL; ?>/assets_dashboard/images/banner/banner2.jpg&quot;) center center;">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">Login</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Login</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner end-->
<!--login-->
<section class="sptb">
    <div class="container customerpage">
        <div class="row">
            <div class="single-page">
                <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                    <div class="wrapper wrapper2">
                        <form method="POST" action="<?= BASEURL; ?>/users/login" class="card-body" tabindex="500">
                            <h3>Login</h3>
                            <?php Flasher::flash(); ?>
                            <div class="name"> <input type="text" name="username" id="username"> <label>Username</label> 
                            <span class="invalidFeedback" style="color: red">
                              <?php echo $data['usernameError']; ?>
                            </span>
                            </div>
                            <div class="passwd"> <input type="password" name="password" id="password"> <label>Password</label>
                            <span class="invalidFeedback" style="color: red">
                              <?php echo $data['passwordError']; ?>
                            </span>
                            </div>
                            <button id="submit" type="submit" value="submit" class="submit btn btn-primary btn-block">Login</button>
                            <p class="mb-2"><a href="#">Forgot Password</a></p>
                            <p class="text-dark mb-0">Don't have account?<a href="<?= BASEURL; ?>/home/register" class="text-primary ml-1">Sign UP</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---end login-->
<!--Section-->
<section class="sptb bg-patterns bg-white">
      <div class="container">
        <div class="section-title center-block text-center">
          <h2>Latest Cars</h2>
          <p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
        </div>
        <div id="myCarousel2" class="owl-carousel owl-carousel-icons5 owl-loaded owl-drag">
          <!-- Wrapper for carousel items -->
          <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-1801px, 0px, 0px); transition: all 0.25s ease 0s; width: 3904px;">
              <div class="owl-item cloned" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-primary">Rent</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h3.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$752.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Syracuse</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a> <a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-purple">Offer</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/v4.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$752.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Interstate A6</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Disel</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-success">Offer</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/f2.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$552.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Steuben B-Class</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 12 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> UK</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 1 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">1000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-secondary">Rent</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/j3.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$322.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text  d-flex"> <a href="#" class="text-dark">
                            <h4 class="">Ranchette</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item" style="width: 275.25px; margin-right: 25px;">
                <div class="item sold-out">
                  <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Booked</span></div>
                  <div class="card mb-0">
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/b3.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$398.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Steuben</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-primary">Rent</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h3.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$752.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Syracuse</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a> <a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-purple">Offer</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/v4.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$752.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Interstate A6</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Disel</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-success">Offer</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/f2.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$552.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Steuben B-Class</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 12 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> UK</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 1 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">1000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-secondary">Rent</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/j3.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$322.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text  d-flex"> <a href="#" class="text-dark">
                            <h4 class="">Ranchette</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 275.25px; margin-right: 25px;">
                <div class="item sold-out">
                  <div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Booked</span></div>
                  <div class="card mb-0">
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/b3.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$398.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Steuben</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-primary">Rent</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/h3.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$752.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Syracuse</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a> <a href="#" class="mr-4" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">4000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-purple">Offer</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/v4.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$752.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Interstate A6</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 22 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Manual"><i class="fa fa-car text-muted"></i> <span class="text-default">Manual</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">2000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Disel</span></a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned" style="width: 275.25px; margin-right: 25px;">
                <div class="item">
                  <div class="card mb-0">
                    <div class="arrow-ribbon bg-success">Offer</div>
                    <div class="item-card7-imgs"> <a class="link" href="#"></a> <img src="<?= BASEURL; ?>/assets_dashboard/images/CarMenu/f2.jpg" alt="img" class="cover-image">
                      <div class="item-tag">
                        <h4 class="mb-0 fs-13">$552.99</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="item-card7-desc">
                        <div class="item-card7-text"> <a href="#" class="text-dark">
                            <h4 class="">Steuben B-Class</h4>
                          </a> </div>
                        <ul class="item-cards7-ic mb-0 mt-2">
                          <li><a href="#"><span class="text-muted"><i class="icon icon-eye mr-1"></i> 12 Views</span></a></li>
                          <li><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> UK</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 1 hours ago</a></li>
                          <li><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 14 675 65430</a></li>
                        </ul>
                        <p class="mb-0">Omnis iste natus error sit dolore dg voluptatem accusantium</p>
                      </div>
                      <div class="item-card2-footer mt-4 mb-0"> <a class="btn btn-primary btn-block" href="#"> BOOK NOW</a> </div>
                    </div>
                    <div class="card-footer"> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="Automatic"><i class="fa fa-car text-muted"></i> <span class="text-default">Auto</span></a> <a href="#" class="mr-2" data-toggle="tooltip" data-placement="bottom" data-original-title="2300 Kilometrs"><i class="fa fa-road text-muted"></i> <span class="text-default">1000</span></a> <a href="#" class="" data-toggle="tooltip" data-placement="bottom" data-original-title="FuelType"><i class="fa fa-tachometer text-muted"></i> <span class="text-default">Petrol</span></a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Section-->