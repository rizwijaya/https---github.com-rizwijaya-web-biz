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
             <h3 class="mb-0">Data Pegawai</h3>
             </div>
             <!-- Button trigger modal -->
             </div>
            </div>
           <!-- Isi Tabel -->
           <div class="table-responsive">
             <table class="table align-items-center table-flush">
               <thead class="thead-light">
                 <tr>
                   <th scope="col" class="sort" data-sort="no">No</th>
                   <th scope="col" class="sort" data-sort="Nama">Nama</th>
                   <th scope="col" class="sort" data-sort="username">Username</th>
                   <th scope="col" class="sort" data-sort="Email">Email</th>
                 </tr>
               </thead>
               <tbody class="list">
                 <?php
                  $no = 1;
                  foreach ($data['pegawai'] as $pg) : ?>
                   <tr>
                     <th scope="row"><?php echo $no++ ?></th>
                                          
                     <td><?= $pg['nama']; ?></td>
                     <td><?= $pg['username']; ?></td>
                     <td><?= $pg['email']; ?></td>
                   </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>
           </div>
           <!-- Ini table nya -->
        </div> <!-- Div Class Container Content-->