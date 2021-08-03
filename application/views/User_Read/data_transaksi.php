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
                          <th>Nama Barang</th>
                          <th>Harga Barang</th>
                      </thead>
                      <tbody>
                        <?php 
                        $total = 0 ;
                          $no = 1;
                          foreach ($tbl_barang as $barang) {
                            $total += $barang->hg_barang;
                            ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $barang->nm_barang ?></td>
                              <td>Rp.<?php echo number_format($barang->hg_barang, 0, ',', '.') ?></td>
                            </tr>
                          <?php } ?>
                      </tbody>
                      <tfoot>
                          <th></th>
                          <th align="right">Total</th>
                          <th>Rp.<?php echo number_format($total, 0, ',', '.') ?></th>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            