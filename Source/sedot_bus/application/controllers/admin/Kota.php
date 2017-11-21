<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

	// Tambah Kota
	public function index() {
		
		$site	= $this->konfigurasi_model->daftar_konfigurasi();
		$kota	= $this->kota_model->daftar_kota();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_kota','Nama Kota','required');
		$valid->set_rules('kd_kota','Kode Kota','required');
		$valid->set_rules('maps','Map Kota','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Daftar Kota - '.$site['nama_website'],
						'kota'	=> $kota,
						'isi'	=> 'admin/kota/list');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'nama_kota'	=> $i->post('nama_kota'),
							'kd_kota'	=> $i->post('kd_kota'),
							'maps'		=> $i->post('maps'),
						);
			$this->kota_model->tambah_kota($data);		
			$this->session->set_flashdata('sukses','Kota berhasil ditambah');
			redirect(base_url('index.php/admin/kota'));
		}
	}

	// Edit Kota
	public function edit($id_kota) {
		
		$site	= $this->konfigurasi_model->daftar_konfigurasi();
		$kota	= $this->kota_model->detail_kota($id_kota);
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_kota','Nama Kota','required');
		$valid->set_rules('kd_kota','Kode Kota','required');
		$valid->set_rules('maps','Map Kota','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Edit Kota - '.$site['nama_website'],
						'kota'	=> $kota,
						'isi'	=> 'admin/kota/edit');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_kota'	=> $kota['id_kota'],
							'nama_kota'	=> $i->post('nama_kota'),
							'kd_kota'	=> $i->post('kd_kota'),
							'maps'		=> $i->post('maps'),
						);
			$this->kota_model->edit_kota($data);		
			$this->session->set_flashdata('sukses','Kota berhasil diupdate');
			redirect(base_url('index.php/admin/kota'));
		}
	}	

	// Delete Kota
	public function delete($id_kota) {
		$data = array('id_kota' => $id_kota);
		$this->kota_model->hapus_kota($data);		
		$this->session->set_flashdata('sukses','Kota berhasil dihapus');
		redirect(base_url('index.php/admin/kota'));
	}			
}