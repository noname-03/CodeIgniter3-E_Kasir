<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Edit Data User Toko</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                <?php foreach ($tbl_user_toko as $user_toko) { ?>
                  <form action="<?php echo base_url().'index.php/Admin/Admin/data_user_toko_edit_aksi' ?>" method="POST">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama User</label>
                          <input type="hidden" class="form-control" name="id_user_toko" value="<?php echo $user_toko->id_user_toko ?>">
                          <input type="text" class="form-control" name="nm_user" value="<?php echo $user_toko->nm_user ?>">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="text" class="form-control" name="password" value="<?php echo $user_toko->password ?>">
                        </div>
                      </div>
                      <div class="form-group">
                      <div class="col-mx-a">
                        <label>Role / Status</label><br>
                        <div class="form-check form-check-inline">
                            <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="custom1" name="status" value="read" <?php if($user_toko->status == 'read') echo "checked='checked'" ?>>
                                <label class="custom-control-label" for="custom1">Read</label>
                                </div>&nbsp;&nbsp;
                                <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="custom2" name="status" value="read-write" <?php if($user_toko->status == 'read-write') echo "checked='checked'" ?>>
                                <label class="custom-control-label" for="custom2">Read & Write</label>
                            </div>
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