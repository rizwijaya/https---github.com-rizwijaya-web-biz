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
             <h3 class="mb-0">Data Tipe Kendaraan</h3>
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
                   <th scope="col" class="sort" data-sort="Kode Tipe">Kode Tipe</th>
                   <th scope="col" class="sort" data-sort="Nama Tipe">Nama Tipe</th>
                   <th scope="col" class="sort" data-sort="kelola">Kelola</th>
                 </tr>
               </thead>
               <tbody class="list">
                 <?php
                  $no = 1;
                  foreach ($data['type'] as $tp) : ?>
                   <tr>
                     <th scope="row"><?php echo $no++ ?></th>
                     <td><?= $tp['kode_type'] ?></td>
                     <td><?= $tp['nama_type'] ?></td>
                     <td>   
                     <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#update_modal<?= $tp['id_type']; ?>"><i class="fas fa-edit"></i></button>
                       <a href="<?= BASEURL; ?>/kendaraan/deletetipe/<?= $tp['id_type']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash" onclick="return confirm('Yakin untuk menghapus Tipe Kendaraan?')"></i></a>
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
                   <h5 class="modal-title" id="judulModal">Tambah Tipe Kendaraan</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <form action="<?= BASEURL; ?>/kendaraan/tambah_tipe" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                       <label class="form-control-label" for="kode_type">Kode Tipe</label>
                       <input type="text" class="form-control" id="kode_type" name="kode_type" required="">
                     </div>
                     <div class="form-group">
                       <label class="form-control-label" for="nama_type">Nama Tipe</label>
                       <input type="text" class="form-control" id="nama_type" name="nama_type" required="">
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
        <?php foreach ($data['type'] as $tp) : ?>
        <div class="modal fade" id="update_modal<?= $tp['id_type']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="judulModal">Update Tipe Kendaraan</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <form action="<?= BASEURL; ?>/kendaraan/update_tipe" method="post" enctype="multipart/form-data">
                   <input type="hidden" class="form-control" id="id_type" name="id_type" value="<?= $tp['id_type']; ?>"> 
                    <div class="form-group">
                       <label class="form-control-label" for="kode_type">Kode Tipe</label>
                       <input type="text" class="form-control" id="kode_type" name="kode_type" value="<?php echo $tp['kode_type']; ?>" required="">
                     </div>
                     <div class="form-group">
                       <label class="form-control-label" for="nama_type">Nama Tipe</label>
                       <input type="text" class="form-control" id="nama_type" name="nama_type" value="<?php echo $tp['nama_type']; ?>" required="">
                     </div>

                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit" name="submit" id="submit" class="btn btn-primary">Update Tipe</button>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
        <?php endforeach; ?>
            <!--End Modal Update -->
        </div> <!-- Div Class Container Content-->

          
      