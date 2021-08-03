<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Karyawan</h4>
                  
                </div>

                <div class="card-body">
                <a href="<?php echo base_url().'index.php/Admin/Admin/data_karyawan_input'?>" class="btn btn-primary">Tambahkan Data</a><br><br>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>NIP</th>
                          <th>Nama Karyawan</th>
                          <th>Jenis Kelamin</th>
                          <th>No HandPhone</th>
                          <th>Alamat</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tfoot>
                      <th>No.</th>
                          <th>NIP</th>
                          <th>Nama Karyawan</th>
                          <th>Jenis Kelamin</th>
                          <th>No HandPhone</th>
                          <th>Alamat</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_karyawan as $karyawan) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $karyawan->nip ?></td>
                              <td><?php echo $karyawan->nm_karyawan ?></td>
                              <td><?php echo $karyawan->gender ?></td>
                              <td><?php echo $karyawan->nohp ?></td>
                              <td><?php echo $karyawan->alamat ?></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_karyawan_edit/$karyawan->id_karyawan"?>" 
                                  class="text-success"><i class="material-icons">edit</i></a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_karyawan_delete/$karyawan->id_karyawan"?>" 
                                  class="text-danger"><i class="material-icons" onclick="return confirm('Apakah anda ingin menghapus data ini ?')">delete</i></a>
                              </td>
                            </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                            