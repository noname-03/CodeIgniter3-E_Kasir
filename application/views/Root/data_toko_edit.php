<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Edit Data Toko</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                <?php foreach ($tbl_toko as $toko) { ?>
                  <form action="<?php echo base_url().'index.php/Root/Root/data_toko_edit_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="hidden" class="form-control" name="id_toko" value="<?php echo $toko->id_toko ?>">
                          <input type="text" class="form-control" name="username" value="<?php echo $toko->username ?>">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama toko</label>
                          <input type="text" class="form-control" name="nm_toko" value="<?php echo $toko->nm_toko ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control" name="password" value="<?php echo $toko->password ?>">
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