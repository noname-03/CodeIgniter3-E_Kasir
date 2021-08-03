<body onload="javascript:window.print()" style="margin: auto; width:90%">
<div style="margin-left: 10px; margin-right: 10px;"></div>

<p>&nbsp;</p>

<table width="90%" align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3"><div align="center"><img src="<?php echo base_url().'assets/assets/logo.png' ?>" width="100" height="100"></div></td>
		<td><div align="center"><font size="5">APLIKASI E-KASIR</font></div></td>
	</tr>
	<tr>
		<td><div align="center"><font size="6">DATA TRANSAKSI</font></div></td>
	</tr>
</table>
<hr>
<p>&nbsp</p>
<font size="5"><center><u>Laporan Data Transaksi</u></center></font>
<p>&nbsp;</p>
<?php foreach ($tbl_tanggal as $tanggal) ?>
<font size="3">Tanggal Transaksi : <?php echo $tanggal->tanggal ?></font><br><p></p>

<table width="90%" align="center" cellpadding="0" cellspacing="0">
	<tr align="center">
		<td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >No.</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Nama Barang</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Harga Barang</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Qty</td>
		<td style="border-right: 1px solid #000; border-top: 1px solid #000; padding: 3px 5px;" >Sub Total</td>
	</tr>
	<tr>
    <?php 
      $no = 1;
      $total = 0;
      foreach ($tbl_barang as $barang) {
		$total += $barang->qty * $barang->hg_barang;?>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $no++ ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $barang->nm_barang ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" >Rp.<?php echo number_format($barang->hg_barang, 0, ',', '.') ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" ><?php echo $barang->qty ?></td>
        <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;" >Rp.<?php echo number_format($barang->qty * $barang->hg_barang, 0, ',', '.') ?></td>
	</tr>
	<?php } ?>	

    <tr>
    <td></td>
    <td></td>
    <td></td>
    <td align="right" style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">Total </td>
    <td style="border-right: 1px solid #000; border-left: 1px solid #000; border-top: 1px solid #000; border-bottom: 1px solid #000; padding: 3px 5px;">
	Rp.<?php echo number_format($total, 0, ',', '.') ?></td></tr>

</table>

<p style="text-align: right; font-size: 18px;">Cirebon, <?php echo date("d M Y") ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

</body>