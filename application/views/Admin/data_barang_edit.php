<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Edit Data Barang</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                <?php foreach ($tbl_barang as $barang) { ?>
                  <form action="<?php echo base_url().'index.php/Admin/Admin/data_barang_edit_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Barang</label>
                          <input type="hidden" class="form-control" name="id_barang" value="<?php echo $barang->id_barang ?>">
                          <input type="text" class="form-control" name="nm_barang" value="<?php echo $barang->nm_barang ?>">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga Barang</label>
                          <input type="text" class="form-control" name="hg_barang" value="<?php echo $barang->hg_barang ?>">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jumlah Barang</label>
                          <input type="text" class="form-control" name="jmlh" value="<?php echo $barang->jmlh ?>">
                        </div>
                      </div>
                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary pull-right" value="Update Data">
                    <div class="clearfix"></div>
                  </form>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>