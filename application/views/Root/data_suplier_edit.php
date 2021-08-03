<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Edit Data Suplier</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                <?php foreach ($tbl_suplier as $suplier) { ?>
                  <form action="<?php echo base_url().'index.php/Admin/Admin/data_suplier_edit_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Suplier</label>
                          <input type="hidden" class="form-control" name="id_sup" value="<?php echo $suplier->id_sup ?>" >
                          <input type="text" class="form-control" name="nm_sup" value="<?php echo $suplier->nm_sup ?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Merk Motor</label>
                          <input type="text" class="form-control" name="merk_motor" value="<?php echo $suplier->merk_motor ?>" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Motor</label>
                          <input type="text" class="form-control" name="jns_motor" value="<?php echo $suplier->jns_motor ?>" >
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jumlah</label>
                          <input type="text" class="form-control" name="jmlh" value="<?php echo $suplier->jmlh ?>" >
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