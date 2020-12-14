<!--Section Banner--->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="<?= BASEURL; ?>/assets_dashboard/images/banner/banner2.jpg" style="background: url(&quot;<?= BASEURL; ?>/assets_dashboard/images/banner/banner2.jpg&quot;) center center;">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">Lengkapi Profile</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Lengkapi Profile</li>
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
            <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                <form id="lengkap-form" method="POST" action="<?= BASEURL; ?>/home/aksi_lengkap" enctype="multipart/form-data">
                    <div class="card mb-0">
                        <div class="card-header">
                            <h3 class="card-title">Lengkap Profile</h3>
                            <?php Flasher::flash(); ?>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <input type="hidden" name="id_user" id="id_user" value="<?= $_SESSION['id_user']; ?>">
                                <div class="col-md-12">
                                    <div class="form-group"> <label class="form-label">Nama</label> <input type="text" name="nama" id="nama" value="<?php foreach ($data['get_nama'] as $gn) {
                                                                                                                                                        echo $gn;
                                                                                                                                                    } ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> <label class="form-label">Alamat</label> <input type="text" name="alamat" id="alamat" class="form-control" required=""> </div>
                                    <span class="invalidFeedback" style="color: red">
                                        <?php echo $data['alamatError']; ?>
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> <label class="form-label">Jenis Kelamin</label>
                                        <select class="form-control" name="gender" id="gender">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <span class="invalidFeedback" style="color: red">
                                        <?php echo $data['genderError']; ?>
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> <label class="form-label">No Telepon</label> <input type="number" name="no_telepon" id="no_telepon" class="form-control" required=""> </div>
                                    <span class="invalidFeedback" style="color: red">
                                        <?php echo $data['no_teleponError']; ?>
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group"> <label class="form-label">Nomor Identitas KTP</label> <input type="number" name="no_ktp" id="no_ktp" class="form-control" required=""> </div>
                                    <span class="invalidFeedback" style="color: red">
                                        <?php echo $data['no_ktpError']; ?>
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0"> <label class="form-label">Upload Photo Profile</label>
                                        <div class="custom-file"> <input type="file" class="custom-file-input" id="gambar" name="gambar" required=""> <label class="custom-file-label" for="gambar">Pilih file</label> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"> <button id="submit" type="submit" value="submit" class="btn btn-success">Lengkapi Profile</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--End Register--->