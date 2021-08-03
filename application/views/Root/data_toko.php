<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Toko</h4>
                  
                </div>

                <div class="card-body">
                <a href="<?php echo base_url().'index.php/Root/Root/data_toko_input'?>" class="btn btn-primary">Tambahkan Data</a><br><br>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>Username</th>
                          <th>Nama Toko</th>
                          <th>Password</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tfoot>
                          <th>No.</th>
                          <th>Username</th>
                          <th>Nama Toko</th>
                          <th>Password</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_toko as $toko) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $toko->username   ?></td>
                              <td><?php echo $toko->nm_toko ?></td>
                              <td><?php echo $toko->password ?></td>
                              <td><a href="<?php echo base_url()."index.php/Root/Root/data_toko_edit/$toko->id_toko"?>" 
                                  class="text-success"><i class="material-icons">edit</i></a></td>
                              <td><a href="<?php echo base_url()."index.php/Root/Root/data_toko_delete/$toko->id_toko"?>" 
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
            