<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	// Main Page
	public function index()
	{	
		$site = $this->konfigurasi_model->daftar_konfigurasi();

		$data = array ( 
						'title' => 'Halaman Dashboard - '.$site['nama_website'],
						'site'  => $site,
						'isi'   => 'admin/dasbor/list'
					  );	

		$this->load->view('admin/layout/wrapper',$data);
	}	
}
