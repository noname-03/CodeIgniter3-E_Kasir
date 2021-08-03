<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data User Toko</h4>
                  
                </div>

                <div class="card-body">
                <a href="<?php echo base_url().'index.php/Admin/Admin/data_user_toko_input'?>" class="btn btn-primary">Tambahkan Data</a><br><br>
                  <div class="table-responsive">
                    <table id="dataTables" class="table table-striped table-bordered no-wrap">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>Nama User</th>
                          <th>Password</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tfoot>
                          <th>No.</th>
                          <th>Nama User</th>
                          <th>Password</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_user_toko as $user_toko) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $user_toko->nm_user ?></td>
                              <td><?php echo $user_toko->password ?></td>
                              <td><?php echo $user_toko->status ?></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_user_toko_edit/$user_toko->id_user_toko"?>" 
                                  class="text-success"><i class="material-icons">edit</i></a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_user_toko_delete/$user_toko->id_user_toko"?>" 
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
            