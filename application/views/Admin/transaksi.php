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
                <!-- modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                <a><i class="material-icons">add</i>Tambah Tanggal</a>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Silahkan Masukan Tanggal Transaksi Baru Anda</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <!-- body -->
                        <form action="<?php echo base_url().'index.php/Admin/Admin/data_tanggal_input_aksi' ?>" method="POST">
                        <div class="row">
                        <div class="col-md-5">
                          <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" >
                          </div>
                        </div>
                      </div>
                <!-- end body -->
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-primary">Save</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- end modal -->
                
                  <div class="table-responsive">
                    <table id="dataTables" class="table table-striped table-bordered no-wrap">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>Date</th>
                          <th>Add</th>
                          <th>View</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tfoot>
                          <th>No.</th>
                          <th>Date</th>
                          <th>Add</th>
                          <th>View</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_tanggal as $tanggal) {
                            $daftar_hari = array(
                              'Sunday' => 'Minggu',
                              'Monday' => 'Senin',
                              'Tuesday' => 'Selasa',
                              'Wednesday' => 'Rabu',
                              'Thursday' => 'Kamis',
                              'Friday' => 'Jumat',
                              'Saturday' => 'Sabtu'
                             );
                             $hari = $tanggal->tanggal;
                             $namahari = date('l', strtotime($hari));
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $daftar_hari[$namahari] ?> - <?php echo $tanggal->tanggal ?>  </td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_transaksi_input/$tanggal->id_tanggal"?>" 
                                  class="text-info"><i class="material-icons">add</i>Tambah Transaksi</a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_transaksi_view/$tanggal->id_tanggal"?>" 
                                  class="text-secondary"><i class="material-icons">preview</i>Lihat Transaksi</a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_tanggal_edit/$tanggal->id_tanggal"?>" 
                                  class="text-success"><i class="material-icons">edit</i>Edit Tanggal</a></td>
                              <td>
                              <a href="<?php echo base_url()."index.php/Admin/Admin/data_tanggal_delete/$tanggal->id_tanggal"?>" 
                                  class="text-danger"><i class="material-icons" onclick="return confirm('Apakah anda ingin menghapus data ini ?')">delete</i></a><a>delete</a>
                              </td>
                            </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            