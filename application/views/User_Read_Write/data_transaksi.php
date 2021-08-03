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
                <?php foreach ($tbl_tanggal as $tanggal) ?>
                <a href="<?php echo base_url()."index.php/User_Read_Write/User_Read_Write/cetak_data/$tanggal->id_tanggal"?>" target="_blank" class="btn btn-info">Cetak Data</a><br><br>
                  <div class="table-responsive">
                    <table id="dataTables" class="table table-striped table-bordered no-wrap">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>Nama Barang</th>
                          <th>Harga Barang</th>
                          <th>Qty</th>
                          <th>Sub Total</th>
                      </thead>
                      <tbody>
                          <tr>
                        <?php 
                          $no = 1;
                          $total = 0;
                          foreach ($tbl_barang as $barang) {
                            $total += $barang->qty * $barang->hg_barang;
                          ?>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $barang->nm_barang ?></td>
                              <td>Rp.<?php echo number_format($barang->hg_barang, 0, ',', '.') ?></td>
                              <td><?php echo $barang->qty ?></td>
                              <td>Rp.<?php echo number_format($barang->qty * $barang->hg_barang, 0, ',', '.') ?></td>
                            </tr>
                          <?php } ?>
                      </tbody>
                      <tfoot>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th>Total</th>
                          <th>Rp.<?php echo number_format($total, 0, ',', '.') ?></th>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            