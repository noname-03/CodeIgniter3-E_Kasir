<h2><center>Data Kredit</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
	<tr>
        <th>No.</th>
        <th>Nama Kredit</th>
        <th>Nama Motor</th>
        <th>Harga Motor</th>
        <th>Lama Angsuran</th>
        <th>DP Awal</th>
        <th>Angsuran Bulanan</th>
	</tr>
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
        <td>Rp.<?php echo number_format(($kredit->hg_motor - $kredit->dp_awal) / $kredit->lm_angsuran,0,',','.') ?>,-</td>
        </tr>
    <?php } ?>
</table>