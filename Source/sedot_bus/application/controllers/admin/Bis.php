<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bis extends CI_Controller {

	// Tambah Bis
	public function index() {
		
		$site		= $this->konfigurasi_model->daftar_konfigurasi();
		$bis		= $this->bis_model->daftar_bis();
		$terminal	= $this->terminal_model->daftar_terminal();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('id_terminal','Nama Terminal','required');
		$valid->set_rules('nama_bis','Nama Bis','required');
		$valid->set_rules('plat_nomer','Plat Nomer','required');
		$valid->set_rules('jumlah_bangku','Jumlah Bangku','required');
		$valid->set_rules('kelas','Kelas','required');
		$valid->set_rules('jam_berangkat','Jam Berangkat','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Daftar Bis - '.$site['nama_website'],
						'bis'	=> $bis,
						'terminal'	=> $terminal,
						'isi'	=> 'admin/bis/list');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_terminal'   => $i->post('id_terminal'),
							'nama_bis'		=> $i->post('nama_bis'),
							'plat_nomer'	=> $i->post('plat_nomer'),
							'jumlah_bangku'	=> $i->post('jumlah_bangku'),
							'kelas'			=> $i->post('kelas'),
							'jam_berangkat'	=> $i->post('jam_berangkat'),
						);
			$this->bis_model->tambah_bis($data);		
			$this->session->set_flashdata('sukses','Bis berhasil ditambah');
			redirect(base_url('index.php/admin/bis'));
		}
	}

	// Edit Bis
	public function edit($id_bis) {
		
		$site	= $this->konfigurasi_model->daftar_konfigurasi();
		$bis	= $this->bis_model->detail_bis($id_bis);
		$terminal	= $this->terminal_model->daftar_terminal();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('plat_nomer','Plat Nomer','required');
		$valid->set_rules('jumlah_bangku','Jumlah Bangku','required');
		$valid->set_rules('kelas','Kelas','required');
		$valid->set_rules('jam_berangkat','Jam Berangkat','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Edit Bis - '.$site['nama_website'],
						'bis'	=> $bis,
						'terminal'	=> $terminal,
						'isi'	=> 'admin/bis/edit');
		$this->load->view('admin/layout/wrapper',$data);
		
		}else{
			$i = $this->input;
			$data = array(	'id_bis'		=> $bis['id_bis'],
							'id_terminal'	=> $i->post('id_terminal'),
							'nama_bis'		=> $i->post('nama_bis'),
							'plat_nomer'	=> $i->post('plat_nomer'),
							'jumlah_bangku'	=> $i->post('jumlah_bangku'),
							'kelas'			=> $i->post('kelas'),
							'jam_berangkat'	=> $i->post('jam_berangkat'),
						);
			$this->bis_model->edit_bis($data);		
			$this->session->set_flashdata('sukses','Bis berhasil diupdate');
			redirect(base_url('index.php/admin/bis'));
		}
	}	

	// Delete Bis
	public function delete($id_bis) {
		$data = array('id_bis' => $id_bis);
		$this->bis_model->hapus_bis($data);		
		$this->session->set_flashdata('sukses','Bis berhasil dihapus');
		redirect(base_url('index.php/admin/bis'));
	}			
}