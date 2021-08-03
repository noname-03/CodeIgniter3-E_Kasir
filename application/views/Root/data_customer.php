<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Customer</h4>
                  
                </div>

                <div class="card-body">
                <a href="<?php echo base_url().'index.php/Admin/Admin/data_customer_input'?>" class="btn btn-primary">Tambahkan Data</a><br><br>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>NIK</th>
                          <th>Nama Customer</th>
                          <th>Jenis Kelamin</th>
                          <th>No HandPhone</th>
                          <th>Alamat</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tfoot>
                          <th>No.</th>
                          <th>NIK</th>
                          <th>Nama Customer</th>
                          <th>Jenis Kelamin</th>
                          <th>No HandPhone</th>
                          <th>Alamat</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_customer as $customer) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $customer->nik ?></td>
                              <td><?php echo $customer->nm_customer ?></td>
                              <td><?php echo $customer->gender ?></td>
                              <td><?php echo $customer->nohp ?></td>
                              <td><?php echo $customer->alamat ?></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_customer_edit/$customer->id_customer"?>" 
                                  class="text-success"><i class="material-icons">edit</i></a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_customer_delete/$customer->id_customer"?>" 
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
            