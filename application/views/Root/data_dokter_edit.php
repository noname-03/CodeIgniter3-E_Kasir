<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Edit Data Dokter</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                <?php foreach ($tbl_dokter as $dokter) { ?>
                    <form action="<?php echo base_url().'index.php/Admin/Admin/data_dokter_edit_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomer Izin Praktek</label>
                          <input type="hidden" class="form-control" name="id_dokter" value="<?php echo $dokter->id_dokter ?>">
                          <input type="text" class="form-control" name="nmr_izinp" value="<?php echo $dokter->nmr_izinp ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Dokter</label>
                          <input type="text" class="form-control" name="nm_dokter" value="<?php echo $dokter->nm_dokter ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Spesialis</label>
                          <input type="text" class="form-control" name="spesialis" value="<?php echo $dokter->spesialis ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alumni</label>
                          <input type="text" class="form-control" name="alumni" value="<?php echo $dokter->alumni ?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Kelamin</label>
                          <input type="text" class="form-control" name="j_kelamin" value="<?php echo $dokter->j_kelamin ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat</label>
                          <input type="text" class="form-control" name="almt_dokter" value="<?php echo $dokter->almt_dokter ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">No HP</label>
                          <input type="text" class="form-control" name="no_hp" value="<?php echo $dokter->no_hp ?>">
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