<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Motor</h4>
                  
                </div>

                <div class="card-body">
                <a href="<?php echo base_url().'index.php/Admin/Admin/data_motor_input'?>" class="btn btn-primary">Tambahkan Data</a><br><br>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                            <th>No.</th>
                            <th>Merk Motor</th>
                            <th>Nama Motor</th>
                            <th>Jenis Motor</th>
                            <th>Harga Motor</th>
                            <th>Edit</th>
                            <th>Delete</th>
                      </thead>
                      <tfoot>
                            <th>No.</th>
                            <th>Merk Motor</th>
                            <th>Nama Motor</th>
                            <th>Jenis Motor</th>
                            <th>Harga Motor</th>
                            <th>Edit</th>
                            <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_motor as $motor) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $motor->merk_motor ?></td>
                              <td><?php echo $motor->nm_motor ?></td>
                              <td><?php echo $motor->jns_motor ?></td>
                              <td>Rp.<?php echo number_format($motor->hg_motor,0,',','.') ?>,-</td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_motor_edit/$motor->id_motor"?>" 
                                  class="text-success"><i class="material-icons">edit</i></a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_motor_delete/$motor->id_motor"?>" 
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
            