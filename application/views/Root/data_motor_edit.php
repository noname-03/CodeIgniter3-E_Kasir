<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Edit Data Motor</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                <?php foreach ($tbl_motor as $motor) { ?>
                  <form action="<?php echo base_url().'index.php/Admin/Admin/data_motor_edit_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Merk Motor</label>
                          <input type="hidden" class="form-control" name="id_motor" value="<?php echo $motor->id_motor ?>" >
                          <input type="text" class="form-control" name="merk_motor" value="<?php echo $motor->merk_motor ?>" >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Motor</label>
                          <input type="text" class="form-control" name="nm_motor" value="<?php echo $motor->nm_motor ?>" >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Motor</label>
                          <input type="text" class="form-control" name="jns_motor" value="<?php echo $motor->jns_motor ?>" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Harga Motor</label>
                          <input type="text" class="form-control" name="hg_motor" value="<?php echo $motor->hg_motor ?>" >
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