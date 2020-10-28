       <!-- Card stats -->
       </div>
       </div>
       </div>
       <!-- Page content -->
       <div class="container-fluid mt--6">
         <div class="card mb-4">
           <!-- Table dimulai -->
           <div class="card-header border-0">
             <div class="row align-items-center">
             <div class="col">
             <h3 class="mb-0">Data Kendaraan</h3>
             <?php Flasher::flash_modal(); ?>
             </div>
             <!-- Button trigger modal -->
             <div class="col text-right">
             <button type="button" class="btn btn-primary mb-0" data-toggle="modal" data-target="#tambah_data">Tambah Data</button>
             </div>
             </div>
            </div>
           <!-- Isi Tabel -->
           <div class="table-responsive">
             <table class="table align-items-center table-flush">
               <thead class="thead-light">
                 <tr>
                   <th scope="col" class="sort" data-sort="no">No</th>
                   <th scope="col" class="sort" data-sort="gambar">Gambar</th>
                   <th scope="col" class="sort" data-sort="type">Type</th>
                   <th scope="col" class="sort" data-sort="merk">Merk</th>
                   <th scope="col" class="sort" data-sort="no_plat">Plat Nomor</th>
                   <th scope="col" class="sort" data-sort="harga">Harga</th>
                   <th scope="col" class="sort" data-sort="status">Status</th>
                   <th scope="col" class="sort" data-sort="aksi">Aksi</th>
                 </tr>
               </thead>
               <tbody class="list">
                 <?php
                  $no = 1;
                  foreach ($data['mobil'] as $mb) : ?>
                   <tr>
                     <th scope="row"><?php echo $no++ ?></th>
                     <td>
                       <img width="100px" src="<?= BASEURL . '/foto_mobil/' . $mb['gambar'] ?>">
                     </td>
                     <td><?= $mb['kode_type'] ?></td>
                     <td><?= $mb['merk'] ?></td>
                     <td><?= $mb['no_plat'] ?></td>
                     <td>Rp. <?php echo number_format($mb['harga'],0,',','.'); ?></td>
                     <td><?php
                          if ($mb['status'] == "0") {
                            echo "<span class='badge badge-dot mr-4'><i class='bg-warning'></i><span class='status'>Tidak Tersedia</span></span>";
                          } else {
                            echo "<span class='badge badge-dot mr-4'><i class='bg-success'></i><span class='status'>Tersedia</span></span>";
                          }
                          ?></td>
                     <td>
                       <a href="<?= BASEURL; ?>/kendaraan/detail/<?= $mb['id_mobil']; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                       <a href="<?= BASEURL; ?>/kendaraan/delete/<?= $mb['id_mobil']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash" onclick="return confirm('Yakin untuk menghapus?')"></i></a>
                       <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#update_modal<?= $mb['id_mobil']; ?>"><i class="fas fa-edit"></i></button>
                     </td>
                   </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>
           </div>
           <!-- Ini table nya -->
           <!-- Modal Tambah Data -->
           <div class="modal fade" id="tambah_data" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="judulModal">Tambah Data Kendaraan</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <form action="<?= BASEURL; ?>/kendaraan/tambah_kendaraan" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                       <label class="form-control-label" for="merk">Merk</label>
                       <input type="text" class="form-control" id="merk" name="merk" required="">
                     </div>
                     <div class="row">
                       <div class="col-md-6">
                         <div class="form-group">
                           <label class="form-control-label" for="type">Type Mobil</label>
                           <select class="form-control" id="kode_type" name="kode_type" required="">
                             <option value="">Pilih Type Kendaraan</option>
                             <?php foreach ($data['type'] as $tp) : ?>
                               <option value="<?= $tp['kode_type'] ?>"><?= $tp['nama_type'] ?></option>
                             <?php endforeach; ?>
                           </select>
                         </div>
                         <div class="form-group">
                           <label class="form-control-label" for="no_plat">Plat Nomor</label>
                           <input type="text" class="form-control" id="no_plat" name="no_plat" required="">
                         </div>
                         <div class="form-group">
                           <label class="form-control-label" for="status">Status</label>
                           <select class="form-control" name="status" id="status">
                             <option value="">Pilih Status</option>
                             <option value="1">Tersedia</option>
                             <option value="0">Tidak Tersedia</option>
                           </select>
                         </div>
                       </div>
                       <div class="col-md-6">
                         <div class="form-group">
                           <label class="form-control-label" for="warna">Warna</label>
                           <input type="text" class="form-control" id="warna" name="warna" required="">
                         </div>
                         <div class="form-group">
                           <label class="form-control-label" for="tahun">Tahun</label>
                           <input type="text" class="form-control" id="tahun" name="tahun">
                         </div>
                         <label>Upload Gambar</label>
                         <div class="custom-file">
                           <input type="file" class="custom-file-input form-control" id="gambar" name="gambar" required="">
                           <label class="custom-file-label" for="gambar">Pilih File</label>
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-4">
                       <div class="form-group">
                           <label class="form-control-label" for="harga">Harga</label>
                           <input type="number" class="form-control" id="harga" name="harga" required="">
                         </div>
                       </div>
                       <div class="col-md-4">
                       <div class="form-group">
                           <label class="form-control-label" for="denda">Denda</label>
                           <input type="number" class="form-control" id="denda" name="denda" required="">
                         </div>
                       </div>
                       <div class="col-md-4">
                       <div class="form-group">
                           <label class="form-control-label" for="lokasi">Lokasi</label>
                           <input type="text" class="form-control" id="lokasi" name="lokasi" required="">
                         </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-md-3">
                       <div class="form-group">
                       <label class="form-control-label" for="ac">AC</label>
                           <select class="form-control" name="ac" id="ac">
                             <option value="">Pilih</option>
                             <option value="1">Ya</option>
                             <option value="0">Tidak</option>
                           </select>
                         </div>
                       </div>
                       <div class="col-md-3">
                       <div class="form-group">
                           <label class="form-control-label" for="transmission">Transmission</label>
                           <input type="text" class="form-control" id="transmission" name="transmission" required="" placeholder="Auto/Manual">
                         </div>
                       </div>
                       <div class="col-md-3">
                       <div class="form-group">
                           <label class="form-control-label" for="kilometer">Kilometer</label>
                           <input type="number" class="form-control" id="kilometer" name="kilometer" required="">
                         </div>
                       </div>
                       <div class="col-md-3">
                       <div class="form-group">
                       <label class="form-control-label" for="video_player">Video Player</label>
                           <select class="form-control" name="video_player" id="video_player">
                             <option value="">Pilih</option>
                             <option value="1">Ya</option>
                             <option value="0">Tidak</option>
                           </select>
                         </div>
                       </div>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="reset" class="btn btn-danger">reset</button>
                       <button type="submit" name="submit" id="submit" class="btn btn-primary">Tambah Data</button>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
            <!--End Modal Tambah -->
            <!-- Modal Update Data -->
            <?php foreach ($data['mobil'] as $mb) : ?>
             <div class="modal fade" id="update_modal<?= $mb['id_mobil']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="judulModal">Update Data Kendaraan</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <div aria-hidden="true" <?= $id = $mb['id_mobil'];
                                              $data['update_mobil'] = $this->model('rental_model')->update($id);
                                              $data['update_type'] = $this->model('rental_model')->getalltype('type');
                                              foreach ($data['update_mobil'] as $upmb) : ?>>
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

          
      