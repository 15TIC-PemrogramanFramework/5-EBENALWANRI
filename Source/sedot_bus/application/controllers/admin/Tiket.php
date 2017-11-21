<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {

	// Daftar Tiket
	public function index() {
		
		$site	  = $this->konfigurasi_model->daftar_konfigurasi();
		$tiket	  = $this->tiket_model->daftar_tiket();
		$terminal = $this->terminal_model->daftar_terminal();
		$bis 	  = $this->bis_model->daftar_bis();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('id_terminal','Terminal','required');
		$valid->set_rules('id_bis','Bis','required');
		$valid->set_rules('harga_tiket','Harga Tiket','required');
		$valid->set_rules('jumlah_tiket','Jumlah Tiket','required');
		$valid->set_rules('status','Status','required');
		$valid->set_rules('keterangan','Keterangan','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'		=> 'Daftar Tiket - '.$site['nama_website'],
						'tiket'		=> $tiket,
						'terminal'	=> $terminal,
						'bis'		=> $bis,
						'isi'		=> 'admin/tiket/list');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(
							'id_terminal'   => $i->post('id_terminal'),
							'id_bis' 	 	=> $i->post('id_bis'),
							'nama_tiket'	=> $i->post('nama_tiket'),
							'kode_tiket'	=> $i->post('kode_tiket'),
							'harga_tiket'	=> $i->post('harga_tiket'),
							'jumlah_tiket'	=> $i->post('jumlah_tiket'),
							'status'		=> $i->post('status'),
							'keterangan'	=> $i->post('keterangan'),
						);
			$this->tiket_model->tambah_tiket($data);		
			$this->session->set_flashdata('sukses','Tiket berhasil ditambah');
			redirect(base_url('index.php/admin/tiket'));
		}
	}

	// Edit Tiket
	public function edit($id_tiket) {
		
		$site	= $this->konfigurasi_model->daftar_konfigurasi();
		$tiket	= $this->tiket_model->detail_tiket($id_tiket);
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('berangkat','Berangkat','required');
		$valid->set_rules('tujuan','Tujuan','required');
		$valid->set_rules('harga_tiket','Harga Tiket','required');
		$valid->set_rules('jumlah_tiket','Jumlah Tiket','required');
		$valid->set_rules('status','Status','required');
		$valid->set_rules('keterangan','Keterangan','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Edit Tiket - '.$site['nama_website'],
						'tiket'	=> $tiket,
						'isi'	=> 'admin/tiket/edit');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_tiket'		=> $tiket['id_tiket'],
							'berangkat'		=> $i->post('berangkat'),
							'tujuan'		=> $i->post('tujuan'),
							'nama_tiket'	=> $i->post('nama_tiket'),
							'kode_tiket'	=> $i->post('kode_tiket'),							
							'harga_tiket'	=> $i->post('harga_tiket'),
							'jumlah_tiket'	=> $i->post('jumlah_tiket'),
							'status'		=> $i->post('status'),
							'keterangan'	=> $i->post('keterangan'),
						);
			$this->tiket_model->edit_tiket($data);		
			$this->session->set_flashdata('sukses','Tiket berhasil diupdate');
			redirect(base_url('index.php/admin/tiket'));
		}
	}	

	// Delete Tiket
	public function delete($id_tiket) {
		$data = array('id_tiket' => $id_tiket);
		$this->tiket_model->hapus_tiket($data);		
		$this->session->set_flashdata('sukses','Tiket berhasil dihapus');
		redirect(base_url('index.php/admin/tiket'));
	}			
}