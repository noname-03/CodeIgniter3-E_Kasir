<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                <?php $nm_toko = $this->session->userdata('ses_nama') ?>
                  <h4 class="card-title">Form Input Data Barang Toko <?php echo $nm_toko ?></h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url().'index.php/Admin/Admin/data_barang_input_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama barang</label>
                          <input type="text" class="form-control" name="nm_barang">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga Barang</label>
                          <input type="text" class="form-control" name="hg_barang">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jumlah Barang</label>
                          <input type="text" class="form-control" name="jmlh">
                        </div>
                      </div>
                      </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" value="Simpan Data">
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>