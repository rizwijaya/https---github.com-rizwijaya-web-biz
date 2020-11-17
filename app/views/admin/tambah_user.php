       <!-- Card stats -->
       </div>
       </div>
       </div>
       <div class="container-fluid mt--6">
         <div class="row justify-content-center">
           <div class="col-lg-8 card-wrapper">
             <!-- Page content -->
             <div class="card mb-4">
               <!-- Card header -->
               <div class="card-header">
                 <h3 class="mb-0">Tambah Pengguna Baru</h3>
                 <?php Flasher::flash_modal(); ?>
               </div>
               <!-- Card body -->
               <div class="card-body">
                 <form id="user-form" method="POST" action="<?= BASEURL; ?>/Users/tambahkan_user">
                   <div class="form-group row">
                     <label class="col-md-2 col-form-label form-control-label">Nama</label>
                     <div class="col-md-10"><input class="form-control" type="text" name="nama" id="nama">
                     <span class="invalidFeedback" style="color: red">
                            <?php echo $data['namaError']; ?>
                            </span></div>
                   </div>
                   <div class="form-group row">
                     <label class="col-md-2 col-form-label form-control-label">Username</label>
                     <div class="col-md-10"><input class="form-control" type="text" name="username" id="username">
                     <span class="invalidFeedback" style="color: red">
                                <?php echo $data['usernameError']; ?>
                            </span></div>
                   </div>
                   <div class="form-group row">
                     <label class="col-md-2 col-form-label form-control-label">Email</label>
                     <div class="col-md-10"><input class="form-control" type="email" name="email" id="email">
                     <span class="invalidFeedback" style="color: red">
                              <?php echo $data['emailError']; ?>
                            </span></div>
                   </div>
                   <div class="form-group row">
                     <label class="col-md-2 col-form-label form-control-label">Password</label>
                     <div class="col-md-10"><input class="form-control" type="password" name="password" id="password">
                     <span class="invalidFeedback" style="color: red">
                              <?php echo $data['passwordError']; ?>
                            </span></div>
                   </div>
                   <div class="form-group row">
                     <label class="col-md-2 col-form-label form-control-label">Confirm Password</label>
                     <div class="col-md-10"><input class="form-control" type="password" name="confirmPassword" id="confirmPassword">
                     <span class="invalidFeedback" style="color: red">
                              <?php echo $data['confirmPasswordError']; ?>
                            </span></div>
                   </div>
                   <div class="form-group row">
                     <label class="col-md-2 col-form-label form-control-label">Peran</label>
                     <div class="col-md-10">
                       <select class="form-control" name="peran" id="peran">
                         <option type="checkbox" value="3" selected>Pelanggan</option>
                         <option type="checkbox" value="2">Pegawai</option>
                         <option type="checkbox" value="1">Admin</option>
                       </select>
                     </div>
                   </div>
                   <div class="modal-footer">
                     <button type="submit" name="submit" id="submit" class="btn btn-primary">Tambahkan Pengguna</button>
                   </div>
                 </form>
               </div>
             </div>
             <!-- End Page content -->
           </div>
         </div>