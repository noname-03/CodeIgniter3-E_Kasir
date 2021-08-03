<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Form Edit Data Kredit</h4>
                  <p class="card-category">Awas Jangan Sampai Salah Yaaa</p>
                </div>
                <div class="card-body">
                <?php foreach ($tbl_kredit as $kredit) { ?>
                  <form action="<?php echo base_url().'index.php/Admin/Admin/data_kredit_edit_aksi' ?>" method="POST">
                  <div class="row">
                    <div class="col-md-5" class="form-group">
                        <label> Data Customer Ini Diambil Dari Data Customer Langsung</label>
                        <input type="hidden" class="form-control" name="id_kredit" value="<?php echo $kredit->id_kredit ?>">
                        <select name="nm_kredit" class="form-control" value="<?php echo $kredit->nm_kredit ?>" >
                          <option disable="">Silahkan Memilih Data Dibawah Ini</option>
                          <?php foreach ($tbl_customer as $customer) : ?>
                            <option value="<?php echo $customer->nm_customer?>"><?php echo $customer->nm_customer?></option>
                          <?php endforeach ; ?>
                          ?>
                        </select>
                        </div>
                        <div class="col-md-5" class="form-group">
                        <label> Data Motor Ini Diambil Dari Data Motor Langsung</label>
                        <select name="nm_motor" class="form-control" value="<?php echo $kredit->nm_motor ?>">
                          <option disable="">Silahkan Memilih Data Dibawah Ini</option>
                          <?php foreach ($tbl_motor as $motor) : ?>
                            <option value="<?php echo $motor->nm_motor?>"><?php echo $motor->nm_motor?></option>
                          <?php endforeach ; ?>
                          ?>
                        </select>
                        </div>
                        <div class="col-md-5" class="form-group">
                        <label> Harga Motor Ini Diambil Dari Data Motor Langsung</label>
                        <select name="hg_motor" class="form-control" value="<?php echo $kredit->hg_motor ?>">
                          <option disable="">Silahkan Memilih Data Dibawah Ini</option>
                          <?php foreach ($tbl_motor as $motor) : ?>
                            <option value="<?php echo $motor->hg_motor?>">
                            <?php echo $motor->nm_motor?> = 
                            <?php echo $motor->hg_motor?></option>
                          <?php endforeach ; ?>
                          ?>
                        </select>
                        </div>
                        <div class="col-md-5" class="form-group">
                        <label>Lama Angsuran</label>
                        <select name="lm_angsuran" class="form-control" value="<?php echo $kredit->lm_angsuran ?>">
                          <option disable="">Silahkan Memilih Data Dibawah Ini</option>
                          <option>2</option>
                          <option>4</option>
                          <option>6</option>
                          <option>8</option>
                          <option>10</option>
                          <option>12</option>
                        </select>
                        </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Dp Awal</label>
                          <input type="text" class="form-control" name="dp_awal" value="<?php echo $kredit->dp_awal ?>" >
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