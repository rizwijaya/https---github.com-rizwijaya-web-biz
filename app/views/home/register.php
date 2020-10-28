<!--Section Banner--->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="<?= BASEURL; ?>/assets_dashboard/images/banner/banner2.jpg" style="background: url(&quot;<?= BASEURL; ?>/assets_dashboard/images/banner/banner2.jpg&quot;) center center;">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">Register</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Banner end-->
<!--Register--->
<section class="sptb">
    <div class="container customerpage">
        <div class="row">
            <div class="single-page">
                <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                    <div class="wrapper wrapper2">
                        <form id="register-form" method="POST" action="<?= BASEURL; ?>/users/regist_pelanggan" class="card-body" tabindex="500">
                            <h3>Register</h3>
                            <?php Flasher::flash(); ?>
                            <div class="name"> <input type="text" name="nama" id="nama"><label>Nama</label>
                            <span class="invalidFeedback" style="color: red">
                            <?php echo $data['namaError']; ?>
                            </span>
                          </div>
                            <div class="name"> <input type="text" name="username" id="username"> <label>Username</label> 
                            <span class="invalidFeedback" style="color: red">
                                <?php echo $data['usernameError']; ?>
                            </span></div>
                            <div class="mail"> <input type="email" name="email" id="email"> <label>Email</label> 
                            <span class="invalidFeedback" style="color: red">
                              <?php echo $data['emailError']; ?>
                            </span></div>
                            <div class="passwd"> <input type="password" name="password" id="password"> <label>Password</label>
                            <span class="invalidFeedback" style="color: red">
                              <?php echo $data['passwordError']; ?>
                            </span></div>
                            <div class="passwd"> <input type="password" name="confirmPassword" id="confirmPassword"> <label>Confirm Password</label> <span class="invalidFeedback" style="color: red">
                              <?php echo $data['confirmPasswordError']; ?>
                            </span></div>
                            <button id="submit" type="submit" value="submit" class="submit btn btn-primary btn-block">Daftar</button>
                            <p class="text-dark mb-0">Already have an account?<a href="<?= BASEURL ?>/home/login" class="text-primary ml-1">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Register--->