<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Kredit</h4>
                  
                </div>

                <div class="card-body">
                <a href="<?php echo base_url().'index.php/Admin/Admin/data_kredit_input'?>" class="btn btn-primary"><i class="material-icons">add</i> Tambahkan Data</a>
                <a href="<?php echo base_url().'index.php/Admin/Admin/laporan_pdf'?>" target="_blank" class="btn btn-warning"><i class="material-icons">save_alt</i> Save PDF</a>
                <a href="<?php echo base_url().'index.php/Kredit/excel'?>" class="btn btn-success"><i class="material-icons">save_alt</i> Save Excel</a><br><br>
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                            <th>No.</th>
                            <th>Nama Kredit</th>
                            <th>Nama Motor</th>
                            <th>Harga Motor</th>
                            <th>Lama Angsuran</th>
                            <th>DP Awal</th>
                            <th>Angsuran Bulanan</th>
                            <th>Edit</th>
                            <th>Delete</th>
                      </thead>
                      <tfoot>
                            <th>No.</th>
                            <th>Nama Kredit</th>
                            <th>Nama Motor</th>
                            <th>Harga Motor</th>
                            <th>Lama Angsuran</th>
                            <th>DP Awal</th>
                            <th>Angsuran Bulanan</th>
                            <th>Edit</th>
                            <th>Delete</th>
                      </tfoot>
                      <tbody>
                        <?php 
                          $no = 1;
                          foreach ($tbl_kredit as $kredit) {
                          ?>
                          <tr>
                              <td><?php echo $no++ ?></td>
                              <td><?php echo $kredit->nm_kredit ?></td>
                              <td><?php echo $kredit->nm_motor ?></td>
                              <td>Rp.<?php echo number_format($kredit->hg_motor,0,',','.') ?>,-</td>
                              <td><?php echo $kredit->lm_angsuran ?> Bulan</td>
                              <td>Rp.<?php echo number_format($kredit->dp_awal,0,',','.') ?>,-</td>
                              <td>Rp.<?php echo number_format($kredit->bln_angsuran,0,',','.') ?>,-</td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_kredit_edit/$kredit->id_kredit"?>" 
                                  class="text-success"><i class="material-icons">edit</i></a></td>
                              <td><a href="<?php echo base_url()."index.php/Admin/Admin/data_kredit_delete/$kredit->id_kredit"?>" 
                                  class="text-danger"><i class="material-icons" onclick="return confirm('Apakah anda ingin menghapus data ini ?')">delete</i></a>
                              </td>
                            </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            