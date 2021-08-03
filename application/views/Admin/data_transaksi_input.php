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
                <form action="<?php echo base_url().'index.php/Admin/Admin/data_transaksi_input_aksi' ?>" method="POST">
                <div class="table-responsive">
                    <table id="dataTables" class="table table-striped table-bordered no-wrap">
                      <thead class=" text-primary">
                          <th>No.</th>
                          <th>Nama Barang</th>
                          <th>Harga Barang</th>
                          <th>Pilih</th>
                          <th>Jumlah Barang</th>
                      </thead>
                      <tfoot>
                          <th>No.</th>
                          <th>Nama Barang</th>
                          <th>Harga Barang</th>
                          <th>pilih</th>
                          <th>Jumlah Barang</th>
                      </tfoot>
                      <tbody>
                      <?php 
                        foreach ($tbl_tanggal as $tanggal) {
                        ?>
                      <?php } ?>
                        <?php 
                          $no = 1;
                          foreach ($tbl_barang as $barang) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo "$barang[nm_barang]" ?></td>
                              <td>Rp.<?php echo number_format("$barang[hg_barang]", 0, ',', '.') ?></td>
                              <td>
                                <input type="hidden" class="form-control" name="id_tanggal" readonly="readonly" value="<?php echo $tanggal->id_tanggal ?>">
                                <input type="Checkbox" class="form-control" name="id_barang[]" value="<?php echo "$barang[id_barang]" ?>">
                              <input type="text" class="form-control" name="qty[]">
                              </td>
                              <td>
                              <label>Masukan Jumlah Yang Ingin Dibeli</label>
                              </td>
                            </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="form-actions">
                      <div class="text-left">
                      <input type="submit" class="btn btn-info" value="Simpan Data">
                      <button type="reset" class="btn btn-dark">Reset</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
            