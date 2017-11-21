<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// Main Page
	public function index()
	{	
		$konfigurasi = $this->konfigurasi_model->daftar_konfigurasi();
		$kontak   	 = $this->kontak_model->daftar_kontak();
		$kota		 = $this->kota_model->daftar_kota();

		$data = array ( 'title'  	  => 'Kontak - '.$konfigurasi['nama_website'],
						'konfigurasi' => $konfigurasi,
						'kontak' 	  => $kontak,
						'kota' 		  => $kota,
						'isi' 		  => 'admin/kontak/list');	

		$this->load->view('admin/layout/wrapper',$data);
	}

	// Lihat Pesan
	public function lihat($id_kontak)
	{	
		$konfigurasi = $this->konfigurasi_model->daftar_konfigurasi();
		$kontak   	 = $this->kontak_model->detail_kontak($id_kontak);
		$kota		 = $this->kota_model->daftar_kota();

		$data = array ( 'title'  	  => 'Kontak - '.$konfigurasi['nama_website'],
						'konfigurasi' => $konfigurasi,
						'kontak' 	  => $kontak,
						'kota' 		  => $kota,
						'isi' 		  => 'admin/kontak/detil');	

		$this->load->view('admin/layout/wrapper',$data);
	}	

	// Hapus Pesan
	public function delete($id_kontak) {
		$data = array('id_kontak' => $id_kontak);
		$this->kontak_model->hapus_kontak($data);		
		$this->session->set_flashdata('sukses','Pesan berhasil dihapus');
		redirect(base_url('index.php/admin/kontak'));
	}	

}