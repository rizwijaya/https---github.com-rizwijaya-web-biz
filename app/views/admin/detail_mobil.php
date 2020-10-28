       <!-- Card stats -->
       </div>
       </div>
       </div>
       <!-- Page content -->
       <div class="container-fluid mt--6">
           <div class="card mb-4">
               <?php foreach ($data['detail'] as $dt) : ?>
                   <div class="card-body">
                       <div class="row">
                           <div class="col-md-6">
                               <img height="450px" width="650px" src="<?= BASEURL . '/foto_mobil/' . $dt['gambar'] ?>">
                           </div>
                           <div class="col-md-6">
                               <div class="table-responsive">
                                   <table class="table align-items-center table-flush">
                                       <tr>
                                           <td>Merek Mobil</td>
                                           <td><?php echo $dt['merk']; ?> (<?php echo $dt['nama_type']; ?>)</td>
                                       </tr>
                                       <tr>
                                           <td>Plat Nomor</td>
                                           <td><?php echo $dt['no_plat']; ?> </td>
                                       </tr>
                                       <tr>
                                           <td>Warna Mobil</td>
                                           <td><?php echo $dt['warna']; ?> </td>
                                       </tr>
                                       <tr>
                                           <td>Tahun Produksi</td>
                                           <td><?php echo $dt['tahun']; ?> </td>
                                       </tr>
                                       <tr>
                                           <td>Harga Mobil</td>
                                           <td>Rp. <?php echo number_format($dt['harga'],0,',','.'); ?> (Denda Rp. <?php echo number_format($dt['denda'],0,',','.'); ?>)</td>
                                       </tr>
                                       <tr>
                                           <td>Status</td>
                                           <td><?php if($dt['status'] == '1') {
                                                    echo 'Tersedia'; } else {
                                                    echo 'Tidak Tersedia';  
                                                    } ?>
                                            </td>
                                       </tr>
                                       <tr>
                                           <td>Lokasi</td>
                                           <td><?php echo $dt['lokasi']; ?>, Indonesia </td>
                                       </tr>
                                       <tr>
                                           <td>Fasilitas</td>
                                           <td><?php 
                                                if($dt['ac'] == '1') {
                                                    echo 'AC ,'; }?> Transmisi <?php echo $dt['transmission'];?>, Kilometer <?php echo $dt['kilometer'];?><?php if($dt['video_player'] == '1') {
                                                        echo ', Video Player'; }?>
                                            </td>
                                       </tr>
                                   </table>
                               </div>
                                <div class="col text-right">
                                    <a class="btn btn-danger mb-0" href="<?= BASEURL; ?>/mobil/data_mobil">Kembali</a>
                                </div>
                           </div>
                       </div>
                   </div>
               <?php endforeach; ?>
           </div> <!-- Div Class Container Content-->