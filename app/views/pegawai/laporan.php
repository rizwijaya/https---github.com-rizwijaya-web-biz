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
                           <h3 class="mb-0">Laporan Transaksi</h3>
                           <?php Flasher::flash_modal(); ?>
                       </div>
                       <div class="col text-right">
                           <a class="btn btn-primary mb-0" href="<?= BASEURL; ?>/transaksi/cetak_laporan"><i class="fa fa-print"></i> Cetak Laporan</a>
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
                               <th scope="col" class="sort" data-sort="tanggal_rental">Tgl. Sewa</th>
                               <th scope="col" class="sort" data-sort="tanggal_kembali">Tgl. Kembali</th>
                               <th scope="col" class="sort" data-sort="tanggal_pengembali">Tgl. Pengembalian</th>
                               <th scope="col" class="sort" data-sort="jumlah_hari">Jumlah Hari</th>
                               <th scope="col" class="sort" data-sort="total_denda">Total Denda</th>
                               <th scope="col" class="sort" data-sort="bayar_awal">Pembayaran Awal</th>
                               <th scope="col" class="sort" data-sort="total_bayar">Total Pembayaran</th>
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
                                   <td><?php echo date('d/m/Y', strtotime($tk['tanggal_rental'])); ?></td>
                                   <td><?php echo date('d/m/Y', strtotime($tk['tanggal_kembali'])); ?></td>
                                   <td><?php echo date('d/m/Y', strtotime($tk['tanggal_pengembalian'])); ?></td>
                                   <td><?php
                                        $rental = strtotime($tk['tanggal_rental']);
                                        $dikembalikan = strtotime($tk['tanggal_pengembalian']);
                                        $jml = abs(($rental - $dikembalikan) / (60 * 60 * 24));
                                        echo "$jml Hari"
                                        ?></td>
                                   <td><?php
                                        $kembali = strtotime($tk['tanggal_kembali']);
                                        $jml_dikem = abs(($kembali - $dikembalikan) / (60 * 60 * 24));
                                        ?> Rp. <?php echo number_format($jml_dikem * $tk['denda'], 0, ',', '.'); ?></td>
                                   <td>
                                       <?php
                                        $jml_bayar = abs(($rental - $kembali) / (60 * 60 * 24));
                                        ?> Rp. <?php echo number_format($jml_bayar * $tk['harga'], 0, ',', '.'); ?></td>
                                   <td>Rp. <?php echo number_format(($jml_dikem * $tk['denda']) + ($jml_bayar * $tk['harga']), 0, ',', '.'); ?></td>
                               </tr>
                           <?php endforeach; ?>
                       </tbody>
                   </table>
               </div>
               <!-- Ini table nya -->
           </div>