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
                 <h3 class="mb-0">Data Transaksi</h3>
                 <?php Flasher::flash_modal(); ?>
               </div>
             </div>
           </div>
           <!-- Isi Tabel -->
           <div class="table-responsive">
             <table class="table align-items-center table-flush">
               <thead class="thead-light">
                 <tr>
                   <th scope="col" class="sort" data-sort="no">No</th>
                   <th scope="col" class="sort" data-sort="pelanggan">Pelanggan</th>
                   <th scope="col" class="sort" data-sort="merk">Merk</th>
                   <th scope="col" class="sort" data-sort="harga">Harga/hari</th>
                   <th scope="col" class="sort" data-sort="denda">Denda/hari</th>
                   <th scope="col" class="sort" data-sort="tanggal_rental">Tgl. Sewa</th>
                   <th scope="col" class="sort" data-sort="tanggal_kembali">Tgl. Kembali</th>
                   <th scope="col" class="sort" data-sort="status_rental">Progress</th>
                   <th scope="col" class="sort" data-sort="action">Action</th>
                 </tr>
               </thead>
               <tbody class="list">
                 <?php
                  $no = 1;
                  foreach ($data['transaksi'] as $tk) : ?>
                   <tr>
                     <th scope="row"><?php echo $no++ ?></th>
                     <td><?= $tk['nama'] ?></td>
                     <td><?= $tk['merk'] ?></td>
                     <td>Rp. <?php echo number_format($tk['harga'], 0, ',', '.'); ?></td>
                     <td>Rp. <?php echo number_format($tk['denda'], 0, ',', '.'); ?></td>
                     <td><?php echo date('d/m/Y', strtotime($tk['tanggal_rental'])); ?></td>
                     <td><?php echo date('d/m/Y', strtotime($tk['tanggal_kembali'])); ?></td>
                     <td><?php
                          if ($tk['status_rental'] == 2) {
                            echo 'Belum Diambil';
                          } else {
                            echo $tk['nama_status'];
                          }; ?></td>
                     <td>
                       <strong><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#update_modal<?php echo $tk['id_rental']; ?>"><i> Update</i></button></strong>
                     </td>
                   </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>
           </div>
           <!-- Ini table nya -->
           <!-- Modal Tambah Data -->
           <?php foreach ($data['transaksi'] as $tk) : ?>
             <div class="modal fade" id="update_modal<?php echo $tk['id_rental']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="judulModal">Perbarui Progress Sewa</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <div aria-hidden="true">
                       <form action="<?= BASEURL; ?>/transaksi/update" method="post">
                         <input type="hidden" class="form-control" id="id_rental" name="id_rental" value="<?= $tk['id_rental'] ?>">
                         <input type="hidden" class="form-control" id="id_mobil" name="id_mobil" value="<?= $tk['id_mobil'] ?>">
                         <div class="form-group">
                           <label class="form-control-label" for="nama">Pelanggan</label>
                           <input type=" text" class="form-control" id="nama" name="nama" value="<?= $tk['nama'] ?>" readonly>
                         </div>
                         <div class="form-group">
                           <label class="form-control-label" for="merk">Merk</label>
                           <input type=" text" class="form-control" id="merk" name="merk" value="<?= $tk['merk'] ?>" readonly>
                         </div>
                         <div class="form-group">
                           <label class="form-control-label" for="status_rental">Progres Sekarang</label>
                           <select class="form-control" name="status_rental" id="status_rental">
                             <?php if ($tk['status_rental'] != "5") { ?>
                               <option <?php if ($tk['status_rental'] == "2") {
                                          echo "selected='selected'";
                                        }
                                        echo $tk['status_rental']; ?> value="2">
                                 <?php if ($tk['status_rental'] == "3") { ?>
                                   Konfirmasi Pembayaran
                                 <?php } else { ?>
                                   Belum Diambil</option>
                             <?php } ?>
                             <?php if ($tk['status_rental'] != "2") { ?>
                               <option <?php if ($tk['status_rental'] == "3") {
                                          echo "selected='selected'";
                                        }
                                        echo $tk['status_rental']; ?> value="3">Pembayaran Ditolak</option>
                             <?php } ?>
                           <?php } ?>
                           <option <?php if ($tk['status_rental'] == "5") {
                                      echo "selected='selected'";
                                    }
                                    echo $tk['status_rental']; ?> value="5">Sedang Disewa</option>
                           <option <?php if ($tk['status_rental'] == "6") {
                                      echo "selected='selected'";
                                    }
                                    echo $tk['status_rental']; ?> value="6">Mobil Dikembalikan</option>
                           </select>
                         </div>
                         <?php if ($tk['status_rental'] == "5") { ?>
                           <div class="form-group">
                             <label class="form-control-label" for="tanggal_pengembalian">Tanggal Pengembalian</label>
                             <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" value="<?= $tk['tanggal_pengembalian'] ?>" required="">
                           </div>
                         <?php } ?>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Data</button>
                         </div>
                       </form>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           <?php endforeach; ?>
           <!--End Modal Tambah -->
         </div>