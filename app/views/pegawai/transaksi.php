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
                   <th scope="col" class="sort" data-sort="tanggal_pengembali">Tgl. Pengembalian</th>
                   <th scope="col" class="sort" data-sort="total_pembayaran">Total Denda</th>
                   <th scope="col" class="sort" data-sort="status_rental">Progress</th>
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
                     <td><?= $tk['nama_status']; ?></td>
                     <td><?= $tk['nama_status']; ?></td>
                   </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>
           </div>
           <!-- Ini table nya -->
            <!-- Modal Tambah Data -->
            <?php  foreach ($data['transaksi'] as $tk) : ?>
               <div class="modal fade" id="update_modal<?php echo $tk['id_rental']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="judulModal">Bukti Pembayaran</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                           <img width="100%" height="100%" src="<?= BASEURL . '/foto_bukti/' . $tk['bukti_bayar'] ?>">
                           </div>
                       </div>
                   </div>
               </div>
               <?php endforeach; ?>
               <!--End Modal Tambah -->
         </div>