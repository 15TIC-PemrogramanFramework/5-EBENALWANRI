<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terminal extends CI_Controller {

   public function __construct() {
        parent::__construct();        
            $this->load->model('terminal_model');         
    }

	// Daftar Terminal
	public function index() {
		
		$site		= $this->konfigurasi_model->daftar_konfigurasi();
		$terminal   = $this->terminal_model->daftar_terminal();
		
		$data = array(	'title'		=> 'Daftar Terminal - '.$site['nama_website'],
						'site'		=> $site,
						'terminal'  => $terminal,
						'isi'		=> 'admin/terminal/daftar');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Tambah Terminal
	public function tambah() {

		$site  	 = $this->konfigurasi_model->daftar_konfigurasi();
		$kota  	 = $this->kota_model->daftar_kota();
		
		$v = $this->form_validation;
		$v->set_rules('id_kota','Nama Kota','required');
		$v->set_rules('nama_terminal','Nama Terminal','required');
		$v->set_rules('berangkat','Berangkat','required');
		$v->set_rules('tujuan','Tujuan','required');

		if($v->run()) {
			
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
				
			$data = array(	'title'	=> 'Tambah Terminal - '.$site['nama_website'],
							'site'	=> $site,
							'kota'	=> $kota,
							'error'	=> $this->upload->display_errors(),
							'isi'	=> 'admin/terminal/tambah');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				// Masuk ke database
				$i = $this->input;
				$data = array(	'id_kota'			 => $i->post('id_kota'),
								'nama_terminal'		 => $i->post('nama_terminal'),
								'berangkat'		 	 => $i->post('berangkat'),
								'berangkat_map'		 => $i->post('berangkat_map'),
								'tujuan'			 => $i->post('tujuan'),	
								'tujuan_map'		 => $i->post('tujuan_map'),								
								'id_user'			 => $this->session->userdata('id'),
								'gambar'			 => $upload_data['uploads']['file_name']
							);				
				$this->terminal_model->tambah_terminal($data);
				$this->session->set_flashdata('sukses','Terminal Telah Ditambah');
				redirect(base_url('admin/terminal'));
		}}
		// Default page
		$data = array(	'title'	=> 'Tambah Terminal - '.$site['nama_website'],
						'site'	=> $site,
						'kota'	=> $kota,	
						'isi'	=> 'admin/terminal/tambah');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Edit Termianal
	public function edit_terminal($id_terminal) {

		$site  	 	= $this->konfigurasi_model->listing();
		$terminal 	= $this->terminal_model->detail_terminal($id_terminal);
		$kota  	 	= $this->kota_model->daftar_kota();
		
		$v = $this->form_validation;
		$v->set_rules('id_kota','Nama Kota','required');
		$v->set_rules('nama_terminal','Nama Terminal','required');
		$v->set_rules('berangkat','Berangkat','required');
		$v->set_rules('tujuan','Tujuan','required');

		if($v->run()) {

		if(!empty($_FILES['gambar']['name'])) {
			
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
				
			$data = array(	'title'		=> 'Edit Terminal - '.$site['nama_website'],
							'site'		=> $site,
							'terminal'	=> $terminal,
							'kota'		=> $kota,
							'error'		=> $this->upload->display_errors(),
							'isi'		=> 'admin/terminal/edit_terminal');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name'];
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				// Masuk ke database
				$i = $this->input;
				$data = array(	'id_terminal'		 => $terminal['id_terminal'],
								'id_kota' 			 => $i->post('id_kota'),
								'nama_terminal'		 => $i->post('nama_terminal'),
								'berangkat'		 	 => $i->post('berangkat'),
								'berangkat_map'		 => $i->post('berangkat_map'),
								'tujuan'			 => $i->post('tujuan'),	
								'tujuan_map'		 => $i->post('tujuan_map'),								
								'id_user'			 => $this->session->userdata('id'),		
								'gambar'			 => $upload_data['uploads']['file_name']
							);				
				$this->terminal_model->edit_terminal($data);
				$this->session->set_flashdata('sukses','Terminal Telah Ditambah');
				redirect(base_url('admin/terminal'));

				}}else{

				$i = $this->input;
				$data = array(	'id_terminal'		 => $terminal['id_terminal'],
								'id_kota' 			 => $i->post('id_kota'),
								'nama_terminal'		 => $i->post('nama_terminal'),
								'berangkat'		 	 => $i->post('berangkat'),
								'berangkat_map'		 => $i->post('berangkat_map'),
								'tujuan'			 => $i->post('tujuan'),	
								'tujuan_map'		 => $i->post('tujuan_map'),								
								'id_user'			 => $this->session->userdata('id'),		
							);				
				$this->terminal_model->edit_terminal($data);
				$this->session->set_flashdata('sukses','Terminal Telah Ditambah');
				redirect(base_url('admin/terminal'));
		}}
		// Default page
		$data = array(	'title'		=> 'Edit Terminal - '.$site['nama_website'],
						'site'		=> $site,
						'terminal'	=> $terminal,
						'kota'		=> $kota,	
						'isi'		=> 'admin/terminal/edit_terminal');
		$this->load->view('admin/layout/wrapper',$data);
	}	

	// Delete Terminal
	public function delete_terminal($id_terminal) {
		$data = array('id_terminal' => $id_terminal);
		$this->terminal_model->hapus_terminal($data);		
		$this->session->set_flashdata('sukses','Terminal berhasil dihapus');
		redirect(base_url('admin/terminal'));
	}		
}