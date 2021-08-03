<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Edit Data Karyawan</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo base_url().'index.php/Admin/Admin/data_karyawan_input_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">NIP</label>
                          <input type="hidden" class="form-control" name="id_customer" >
                          <input type="text" class="form-control" name="nip" >
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Karyawan</label>
                          <input type="text" class="form-control" name="nm_karyawan" >
                        </div>
                      </div>
                      <div class="form-group">
                      <div class="col-mx-a">
                        <label>Jenis Kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="custom1" name="gender" value="Laki-Laki" >
                                <label class="custom-control-label" for="custom1">Laki-Laki</label>
                                </div>&nbsp;&nbsp;
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom2" name="gender" value="Perempuan" >
                                <label class="custom-control-label" for="custom2">Perempuan</label>
                            </div>
											  </div>
                      </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">No HandPhone</label>
                          <input type="text" class="form-control" name="nohp" >
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat</label>
                          <input type="text" class="form-control" name="alamat" >
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