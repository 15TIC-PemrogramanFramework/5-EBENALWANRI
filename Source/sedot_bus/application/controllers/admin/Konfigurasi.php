<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi extends CI_Controller {

	// Konfigurasi Umum
	public function umum() {
		
		$site		= $this->konfigurasi_model->daftar_konfigurasi();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama_website','Nama Website','required');
		$valid->set_rules('email','Email','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'		=> 'Konfigurasi Umum - '.$site['nama_website'],
						'site'		=> $site,
						'isi'		=> 'admin/konfigurasi/umum');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'id_konfigurasi'=> $i->post('id_konfigurasi'),
							'nama_website'	=> $i->post('nama_website'),
							'email'			=> $i->post('email'),
							'google_map'	=> $i->post('google_map'),
							'tentang'		=> $i->post('tentang'),
							'metatext'		=> $i->post('metatext'),
							'keywords'		=> $i->post('keywords'),
							'facebook'		=> $i->post('facebook'),
							'telepone'		=> $i->post('telepone'),
						);
			$this->konfigurasi_model->edit($data);		
			$this->session->set_flashdata('sukses','Konfigurasi berhasil diupdate');
			redirect(base_url('index.php/admin/konfigurasi/umum'));
		}
	}
}