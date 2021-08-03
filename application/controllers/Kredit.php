<?php

	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	
	class Kredit extends CI_Controller{

		public function excel()
		{
			$this->load->model('ModExcel');
			$spreadsheet = new Spreadsheet();
			$sheet = $spreadsheet->getActiveSheet();
			$sheet->setCellValue('A1', 'No');
			$sheet->setCellValue('B1', 'Nama Kredit');
			$sheet->setCellValue('C1', 'Nama Motor');
			$sheet->setCellValue('D1', 'Harga Motor');
			$sheet->setCellValue('E1', 'Lama Angsuran');
			$sheet->setCellValue('F1', 'DP Awal');
			$sheet->setCellValue('G1', 'Angsuran Bulanan');
			
			$tbl_kredit = $this->ModExcel->getAll();
			$no = 1;
			$x = 2;
			foreach($tbl_kredit as $kredit)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $kredit->nm_kredit);
				$sheet->setCellValue('C'.$x, $kredit->nm_motor);
				$sheet->setCellValue('D'.$x, 'Rp.'.number_format($kredit->hg_motor,0,',','.').',-');
				$sheet->setCellValue('E'.$x, $kredit->lm_angsuran.' '.'Bulan');
				$sheet->setCellValue('F'.$x, 'Rp.'.number_format($kredit->dp_awal,0,',','.').',-');
				$sheet->setCellValue('G'.$x, 'Rp.'.number_format($kredit->bln_angsuran,0,',','.').',-');
				$x++;
			}
			$writer = new Xlsx($spreadsheet);
			$filename = 'laporan-kredit';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
		}
	}
?>