       <!-- Card stats -->
       </div>
       </div>
       </div>
       <!-- Page content -->
       <div class="container-fluid mt--6">
           <div class="card mb-4">
               <?php foreach ($data['detail'] as $dt) : ?>
                   <div class="card-body">
                   <div class="card">
                        <!-- List group -->
                        <div class="row">
                            <div class="col-md-6">
                            <img class="card-img-top" height="320px" src="<?= BASEURL . '/foto_mobil/' . $dt['gambar'] ?>" alt="Mobil">
                            </div>
                            <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">Merek Kendaraan : <?php echo $dt['merk']; ?> (<?php echo $dt['nama_type']; ?>)</li>  
                            <li class="list-group-item">Harga : Rp. <?php echo number_format($dt['harga'],0,',','.'); ?> (Denda Rp. <?php echo number_format($dt['denda'],0,',','.'); ?>)</li>
                            <li class="list-group-item">Plat Nomor : <?php echo $dt['no_plat']; ?> (<?php echo $dt['lokasi']; ?>, Indonesia)</li>
                            <li class="list-group-item">Warna Kendaraan : <?php echo $dt['warna']; ?></li>
                            <li class="list-group-item">Tahun produksi : <?php echo $dt['tahun']; ?></li>
                            <li class="list-group-item">Status : <?php if($dt['status'] == '1') {
                                                    echo 'Tersedia'; } else {
                                                    echo 'Tidak Tersedia';  
                                                    } ?></li>
                            </ul>
                            </div>
                        </div>
                        
                        <!-- Card body -->
                        <div class="card-body">
                        <h3 class="card-title mb-3">Fasilitas</h3>
                        <p class="card-text mb-4">Terdapat beberapa fasilitas pada <?php echo $dt['merk']; ?> tipe <?php echo $dt['nama_type']; ?> seperti <?php 
                                                if($dt['ac'] == '1') {
                                                    echo 'AC ,'; }?> Transmisi <?php echo $dt['transmission'];?>, Kilometer <?php echo $dt['kilometer'];?><?php if($dt['video_player'] == '1') {
                                                        echo ', Video Player'; }?></p>
                        <div class="col text-right">
                            <a class="btn btn-danger mb-0" href="<?= BASEURL; ?>/kendaraan">Kembali</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update_modal<?= $dt['id_mobil']; ?>">Perbarui Data</button>
                        </div>
                        </div>
                    </div>
                   </div>
               <?php endforeach; ?>

               <!-- Modal Update Data -->
            <?php foreach ($data['detail'] as $dt) : ?>
             <div class="modal fade" id="update_modal<?= $dt['id_mobil']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="judulModal">Update Data Kendaraan</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <div aria-hidden="true" <?= $id = $dt['id_mobil'];
                                              $dataMobil = $this->model('rental_model')->update($id);
                                              $data['update_type'] = $this->model('rental_model')->getalltype('type');
                                              foreach ($dataMobil as $upmb) : ?>>
                       <form action="<?= BASEURL; ?>/kendaraan/update" method="post" enctype="multipart/form-data">
                         <input type="hidden" class="form-control" id="id_mobil" name="id_mobil" value="<?= $upmb['id_mobil'] ?>">
                         <div class="form-group">
                           <label class="form-control-label" for="merk"">Merk</label>
                       <input type=" text" class="form-control" id="merk" name="merk" value="<?= $upmb['merk'] ?>" required="">
                         </div>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                               <label class="form-control-label" for="type">Type Kendaraan</label>
                               <input type="hidden" name="id_mobil" value="<?= $upmb['id_mobil'] ?>">
                               <select class="form-control" id="kode_type" name="kode_type" required="">
                                 <option value="<?= $upmb['kode_type'] ?>"><?= $upmb['kode_type'] ?></option>
                                 <?php foreach ($data['update_type'] as $uptp) : ?>
                                   <option value="<?= $uptp['kode_type'] ?>"><?= $uptp['nama_type'] ?></option>
                                 <?php endforeach; ?>
                               </select>
                             </div>
                             <div class="form-group">
                               <label class="form-control-label" for="no_plat">Plat Nomor</label>
                               <input type="text" class="form-control" id="no_plat" name="no_plat" value="<?= $upmb['no_plat'] ?>" required="">
                             </div>
                             <div class="form-group">
                               <label class="form-control-label" for="status">Status</label>
                               <select class="form-control" name="status" id="status">
                                 <option <?php if ($upmb['status'] == "1") {
                                                  echo "selected='selected'";
                                                }
                                                echo $upmb['status']; ?> value="1">Tersedia</option>
                                 <option <?php if ($upmb['status'] == "0") {
                                                  echo "selected='selected'";
                                                }
                                                echo $upmb['status']; ?> value="0">Tidak Tersedia</option>
                               </select>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                               <label class="form-control-label" for="warna">Warna</label>
                           <input type=" text" class="form-control" id="warna" name="warna" value="<?= $upmb['warna'] ?>" required="">
                             </div>
                             <div class="form-group">
                               <label class="form-control-label" for="tahun">Tahun</label>
                               <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $upmb['tahun'] ?>" required="">
                             </div>
                             <label>Upload Gambar</label>
                             <div class="custom-file">
                               <input type="file" class="custom-file-input form-control" id="gambar" name="gambar">
                               <label class="custom-file-label" for="gambar">Pilih File</label>
                             </div>
                           </div>
                         </div>
                         <div class="row">
                       <div class="col-md-4">
                       <div class="form-group">
                           <label class="form-control-label" for="harga">Harga</label>
                           <input type="number" class="form-control" id="harga" name="harga" value="<?= $upmb['harga'] ?>" required="">
                         </div>
                       </div>
                       <div class="col-md-4">
                       <div class="form-group">
                           <label class="form-control-label" for="denda">Denda</label>
                           <input type="number" class="form-control" id="denda" name="denda" value="<?= $upmb['denda'] ?>" required="">
                         </div>
                       </div>
                       <div class="col-md-4">
                       <div class="form-group">
                           <label class="form-control-label" for="lokasi">Lokasi</label>
                           <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= $upmb['lokasi'] ?>" required="">
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-3">
                       <div class="form-group">
                       <label class="form-control-label" for="ac">AC</label>
                           <select class="form-control" name="ac" id="ac">
                           <option <?php if ($upmb['ac'] == "1") {
                                                  echo "selected='selected'";
                                                }
                                                echo $upmb['ac']; ?> value="1">Ya</option>
                                 <option <?php if ($upmb['ac'] == "0") {
                                                  echo "selected='selected'";
                                                }
                                                echo $upmb['ac']; ?> value="0">Tidak</option>
                           </select>
                         </div>
                       </div>
                       <div class="col-md-3">
                       <div class="form-group">
                           <label class="form-control-label" for="transmission">Transmission</label>
                           <input type="text" class="form-control" id="transmission" name="transmission" required="" value="<?= $upmb['transmission'] ?>">
                         </div>
                       </div>
                       <div class="col-md-3">
                       <div class="form-group">
                           <label class="form-control-label" for="kilometer">Kilometer</label>
                           <input type="number" class="form-control" id="kilometer" name="kilometer" value="<?= $upmb['kilometer'] ?>" required="">
                         </div>
                       </div>
                       <div class="col-md-3">
                       <div class="form-group">
                       <label class="form-control-label" for="video_player">Video Player</label>
                           <select class="form-control" name="video_player" id="video_player">
                           <option <?php if ($upmb['video_player'] == "1") {
                                                  echo "selected='selected'";
                                                }
                                                echo $upmb['video_player']; ?> value="1">Ya</option>
                                 <option <?php if ($upmb['video_player'] == "0") {
                                                  echo "selected='selected'";
                                                }
                                                echo $upmb['video_player']; ?> value="0">Tidak</option> 
                           </select>
                         </div>
                       </div>
                     </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Data</button>
                         </div>
                       </form>
                     <?php endforeach; ?>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
          <?php endforeach; ?>
       <!--End Update Modal -->
           </div> <!-- Div Class Container Content-->