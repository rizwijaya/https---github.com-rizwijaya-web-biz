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
                 <h3 class="mb-0">Pembayaran Masuk</h3>
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
                   <th scope="col" class="sort" data-sort="tanggal_rental">Tgl. Sewa</th>
                   <th scope="col" class="sort" data-sort="tanggal_kembali">Tgl. Kembali</th>
                   <th scope="col" class="sort" data-sort="total_hari">Hari</th>
                   <th scope="col" class="sort" data-sort="total_pembayaran">Total Pembayaran</th>
                   <th scope="col" class="sort" data-sort="bukti_bayar">Invoice</th>
                   <th scope="col" class="sort" data-sort="kelola">Kelola</th>
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
                     <td><?php echo date('d/m/Y', strtotime($tk['tanggal_rental'])); ?></td>
                     <td><?php echo date('d/m/Y', strtotime($tk['tanggal_kembali'])); ?></td>
                     <td><?php
                          $rental = strtotime($tk['tanggal_rental']);
                          $kembali = strtotime($tk['tanggal_kembali']);
                          $jml = abs(($rental - $kembali) / (60 * 60 * 24));
                          echo "$jml Hari"
                          ?></td>
                     <td>Rp. <?php echo number_format($tk['harga'] * $jml, 0, ',', '.'); ?></td>
                     <td><strong><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#update_modal<?php echo $tk['id_rental']; ?>"><i> Detail Invoice </i></button></strong></td>
                     <td>
                       <div class="row">
                         <a class="btn btn-sm btn-success mr-2" href="<?= BASEURL; ?>/transaksi/selesai/<?= $tk['id_rental'] ?>"><i class='fas fa-check'></i></a>
                         <a class="btn btn-sm btn-danger" href="<?= BASEURL; ?>/transaksi/cancel/<?= $tk['id_rental'] ?>"><i class='fas fa-times' onclick="return confirm('Apakah anda yakin untuk menghapus transaksi?')"></i></a>
                       </div>
                     </td>
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