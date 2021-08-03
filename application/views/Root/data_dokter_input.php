<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Input Data Dokter</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url().'index.php/Admin/Admin/data_dokter_input_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nomer Izin Praktek</label>
                          <input type="text" class="form-control" name="nmr_izinp">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Dokter</label>
                          <input type="text" class="form-control" name="nm_dokter">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Spesialis</label>
                          <input type="text" class="form-control" name="spesialis">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alumni</label>
                          <input type="text" class="form-control" name="alumni">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jenis Kelamin</label>
                          <input type="text" class="form-control" name="j_kelamin">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat</label>
                          <input type="text" class="form-control" name="almt_dokter">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">No HP</label>
                          <input type="text" class="form-control" name="no_hp">
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