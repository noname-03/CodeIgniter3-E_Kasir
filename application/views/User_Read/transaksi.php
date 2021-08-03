<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <?php $nm_toko = $this->session->userdata('ses_nama') ?>
                  <h4 class="card-title ">Data Transaksi</h4>  
                </div>  

                <div class="card-body">
                
                
                  <div class="table-responsive">
                    <table id="dataTables" class="table table-striped table-bordered no-wrap">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>Date</th>
                          <th>View</th>
                      </thead>
                      <tfoot>
                          <th>No.</th>
                          <th>Date</th>
                          <th>View</th>
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
                              <td><a href="<?php echo base_url()."index.php/User_Read/User_Read/data_transaksi_view/$tanggal->id_tanggal"?>" 
                                  class="text-secondary"><i class="material-icons">preview</i>Lihat Transaksi</a></td>
                            </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            