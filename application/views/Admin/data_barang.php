<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <?php $nm_toko = $this->session->userdata('ses_nama') ?>
                  <h4 class="card-title ">Data Barang Toko <?php echo $nm_toko ?></h4>  
                </div>  

                <div class="card-body">
                <a href="<?php echo base_url().'index.php/Admin/Admin/data_barang_input'?>" class="btn btn-primary">Tambahkan Data</a><br><br>
                  <div class="table-responsive">
                    <table id="dataTables" class="table table-striped table-bordered no-wrap">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>Nama Barang</th>
                          <th>Harga Barang</th>
                          <th>Jumlah</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tfoot>
                          <th>No.</th>
                          <th>Nama Barang</th>
                          <th>Harga Barang</th>
                          <th>Jumlah</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_barang as $barang) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $barang->nm_barang ?></td>
                              <td>Rp.<?php echo number_format($barang->hg_barang, 0, ',', '.') ?></td>
                              <td><?php echo $barang->jmlh ?></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_barang_edit/$barang->id_barang"?>" 
                                  class="text-success"><i class="material-icons">edit</i></a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_barang_delete/$barang->id_barang"?>" 
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
            