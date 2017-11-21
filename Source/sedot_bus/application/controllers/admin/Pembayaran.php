<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	// Daftar Tiket
	public function index() {
		
		$site	= $this->konfigurasi_model->daftar_konfigurasi();
		$bayar	= $this->pembayaran_model->daftar_pembayaran();
		$member	= $this->users_model->daftar_member();
		$tiket	= $this->tiket_model->daftar_tiket();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('id_member','Member','required');
		$valid->set_rules('id_tiket','Tiket','required');
		$valid->set_rules('status','Status','required');
		$valid->set_rules('keterangan','Keterangan','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Daftar Pembayaran - '.$site['nama_website'],
						'bayar'	=> $bayar,
						'member'=> $member,
						'tiket'	=> $tiket,
						'isi'	=> 'admin/bayar/list');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(
							'id_member'		=> $i->post('id_member'),
							'id_tiket'		=> $i->post('id_tiket'),
							'status'		=> $i->post('status'),
							'tanggal_bayar'	=> $i->post('tanggal_bayar'),
							'status'		=> $i->post('status'),
							'keterangan'	=> $i->post('keterangan'),
						);
			$this->pembayaran_model->tambah_pembayaran($data);		
			$this->session->set_flashdata('sukses','Pembayaran berhasil ditambah');
			redirect(base_url('index.php/admin/pembayaran'));
		}
	}

	// Edit Pembayaran
	public function edit($id_bayar) {
		
		$site	= $this->konfigurasi_model->daftar_konfigurasi();
		$bayar	= $this->pembayaran_model->detail_pembayaran($id_bayar);
		$member = $this->users_model->daftar_member();
		$tiket 	= $this->tiket_model->daftar_tiket();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('id_member','Member','required');
		$valid->set_rules('id_tiket','Tiket','required');
		$valid->set_rules('status','Status','required');
		$valid->set_rules('keterangan','Keterangan','required');
		$valid->set_rules('tanggal_bayar','Tanggal Bayar','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Edit Pembayaran - '.$site['nama_website'],
						'bayar'	=> $bayar,
						'member'=> $member,
						'tiket'	=> $tiket,
						'isi'	=> 'admin/bayar/edit');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_bayar'		=> $bayar['id_bayar'],
							'id_member'		=> $i->post('id_member'),
							'id_tiket'		=> $i->post('id_tiket'),
							'status'		=> $i->post('status'),
							'tanggal_bayar'	=> $i->post('tanggal_bayar'),
							'status'		=> $i->post('status'),
							'keterangan'	=> $i->post('keterangan'),
						);
			$this->pembayaran_model->edit_pembayaran($data);		
			$this->session->set_flashdata('sukses','Pembayaran berhasil diupdate');
			redirect(base_url('index.php/admin/pembayaran'));
		}
	}	

	// Delete Pembayaran
	public function delete($id_bayar) {
		$data = array('id_bayar' => $id_bayar);
		$this->pembayaran_model->hapus_pembayaran($data);		
		$this->session->set_flashdata('sukses','Pembayaran berhasil dihapus');
		redirect(base_url('index.php/admin/pembayaran'));
	}	


	// Laporan PDF
	public function cetak_pdf() {
			
			$this->load->library("tcpdf");
			
			$pdf = new tcpdf();
			
			$orientation = "L";
			$format = "A4";
			$keepmargins = false;
			$tocpage = false;
			
			$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
			
			$family = "dejavusans";
			$style = "";
			$size = "12";
			
			$pdf->SetFont($family, $style, $size);
			
			$html = '
			<h1>Laporan Pembayaran</h1>
			<br />
			<table border="1">
				<tr bgcolor="black" style="color: white;" align="center">
						   <th>Nama Member</th>
						   <th>Tiket</th>
						   <th>Status</th>
						   <th>Tanggal Bayar</th>
						   <th>Keterangan</th>
				</tr>';
			
			$i = 1;
			
			$result = $this->pembayaran_model->daftar_pembayaran();
			foreach ($result as $value) 	:			
			
			$html .= '
				<tr>
					<td align="center">'.$value['nama_depan'].' '.$value['nama_belakang'].'</td>
					<td align="center">'.$value['nama_tiket'].'</td>
					<td align="center">'.$value['status'].'</td>
					<td align="center">'.$value['tanggal_bayar'].'</td>
					<td align="center">'.$value['keterangan'].'</td>
				</tr>';
			$i++;
			endforeach;
				
			$html .= '</table>';
						
			$ln = true;
			$fill = false;
			$reseth = false;
			$cell = false;
			$align = "";
			
			$pdf->writeHTML($html, $ln, $fill, $reseth, $cell, $align);
			
			$pdf->Output();
			
			$dest = "F";
			
			$pdf->Output($name, $dest);
	}  


}