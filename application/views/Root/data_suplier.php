<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Suplier</h4>
                  
                </div>

                <div class="card-body">
                <a href="<?php echo base_url().'index.php/Admin/Admin/data_suplier_input'?>" class="btn btn-primary">Tambahkan Data</a><br><br>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                            <th>No.</th>
                            <th>Nama Suplier</th>
                            <th>Merk Motor</th>
                            <th>Jenis Motor</th>
                            <th>Jumlah</th>
                            <th>Edit</th>
                            <th>Delete</th>
                      </thead>
                      <tfoot>
                            <th>No.</th>
                            <th>Nama Suplier</th>
                            <th>Merk Motor</th>
                            <th>Jenis Motor</th>
                            <th>Jumlah</th>
                            <th>Edit</th>
                            <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_suplier as $suplier) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $suplier->nm_sup ?></td>
                              <td><?php echo $suplier->merk_motor ?></td>
                              <td><?php echo $suplier->jns_motor ?></td>
                              <td><?php echo $suplier->jmlh ?></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_suplier_edit/$suplier->id_sup"?>" 
                                  class="text-success"><i class="material-icons">edit</i></a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_suplier_delete/$suplier->id_sup"?>" 
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
            