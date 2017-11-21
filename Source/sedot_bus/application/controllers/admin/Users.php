<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	// Daftar Admin
	public function admin() {
		
		$site	= $this->konfigurasi_model->daftar_konfigurasi();
		$admin	= $this->users_model->daftar_admin();
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('username','Username','required');
		$valid->set_rules('email','Email','required');
		$valid->set_rules('password','Password','required');
		
		if($valid->run() === FALSE) {
		
		$data = array(	'title'	=> 'Daftar Admin - '.$site['nama_website'],
						'admin'	=> $admin,
						'isi'	=> 'admin/users/admin/list');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i = $this->input;
			$data = array(	'username'	=> $i->post('username'),
							'password'	=> sha1($i->post('password')),
							'email'		=> $i->post('email'),
						);
			$this->users_model->create($data);		
			$this->session->set_flashdata('sukses','Admin berhasil ditambah');
			redirect(base_url('index.php/admin/users/admin'));
		}
	}

	// Daftar Member
	public function member(){
		
		$site 	= $this->konfigurasi_model->daftar_konfigurasi();
		$member = $this->users_model->daftar_member();

		$data = array ( 'title'  => 'Daftar Member - '.$site['nama_website'],
						'member' => $member,
						'isi'	 => 'admin/users/member/daftar' );

		$this->load->view('admin/layout/wrapper',$data);
	}

	// Tambah Member
	public function tambah_member() {
		$site  	 = $this->konfigurasi_model->daftar_konfigurasi();
		$member  = $this->users_model->daftar_member();
		
		$v = $this->form_validation;
		$v->set_rules('username','Username','required');
		$v->set_rules('email','Email','required');
		$v->set_rules('password','Password','required');
		$v->set_rules('ttl','Tanggal Lahir','required');
		$v->set_rules('alamat','Alamat','required');
		$v->set_rules('telepone','Telepone','required');
		$v->set_rules('nama_depan','Nama Depan','required');
		$v->set_rules('nama_belakang','Nama Belakang','required');

		if($v->run()) {
			
			$config['upload_path'] 		= './assets/upload/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('avatar')) {
				
		$data = array(	'title'	=> 'Tambah Member - '.$site['nama_website'],
						'site'	=> $site,
						'member'=> $member,
						'error'	=> $this->upload->display_errors(),
						'isi'	=> 'admin/users/member/tambah');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				// Masuk ke database
				$i = $this->input;
				$data = array(	'nama_depan'	=> $i->post('nama_depan'),
								'nama_belakang'	=> $i->post('nama_belakang'),
								'username'		=> $i->post('username'),
								'email'			=> $i->post('email'),
								'password'		=> sha1($i->post('password')),
								'ttl'			=> $i->post('ttl'),								
								'alamat'		=> $i->post('alamat'),								
								'telepone'		=> $i->post('telepone'),								
								'tanggal_daftar'=> $i->post('tanggal_daftar'),								
								'avatar'		=> $upload_data['uploads']['file_name']
							);				
				$this->users_model->tambah_member($data);
				$this->session->set_flashdata('sukses','Member Telah Ditambah');
				redirect(base_url('admin/users/member'));
		}}
		// Default page
		$data = array(	'title'	=> 'Tambah Member - '.$site['nama_website'],
						'site'	=> $site,
						'member'=> $member,
						'isi'	=> 'admin/users/member/tambah');
		$this->load->view('admin/layout/wrapper',$data);
	}

	// Edit Member
	public function edit_member($id_member) {
		
		$site  	 = $this->konfigurasi_model->daftar_konfigurasi();
		$member  = $this->users_model->detail_member($id_member);
		
		$v = $this->form_validation;
		$v->set_rules('username','Username','required');
		$v->set_rules('email','Email','required');
		$v->set_rules('ttl','Tanggal Lahir','required');
		$v->set_rules('alamat','Alamat','required');
		$v->set_rules('telepone','Telepone','required');
		$v->set_rules('nama_depan','Nama Depan','required');
		$v->set_rules('nama_belakang','Nama Belakang','required');

		if($v->run()) {

			if(!empty($_FILES['avatar']['name'])) {					

			$config['upload_path'] 		= './assets/upload/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('avatar')) {
				
		$data = array(	'title'	=> 'Edit Member - '.$site['nama_website'],
						'site'	=> $site,
						'member'=> $member,
						'error'	=> $this->upload->display_errors(),
						'isi'	=> 'admin/users/member/edit');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
					
				// Masuk ke database
				$i = $this->input;

				if($i->post('password') == true) {
				$data = array(	'id_member'		=> $member['id_member'],
								'nama_depan'	=> $i->post('nama_depan'),
								'nama_belakang'	=> $i->post('nama_belakang'),
								'username'		=> $i->post('username'),
								'email'			=> $i->post('email'),
								'ttl'			=> $i->post('ttl'),								
								'alamat'		=> $i->post('alamat'),								
								'telepone'		=> $i->post('telepone'),								
								'tanggal_daftar'=> $i->post('tanggal_daftar'),								
								'avatar'		=> $upload_data['uploads']['file_name']
							);	
				}

				$data = array(	'id_member'		=> $member['id_member'],
								'nama_depan'	=> $i->post('nama_depan'),
								'nama_belakang'	=> $i->post('nama_belakang'),
								'username'		=> $i->post('username'),
								'email'			=> $i->post('email'),
								'password'		=> sha1($i->post('password')),
								'ttl'			=> $i->post('ttl'),								
								'alamat'		=> $i->post('alamat'),								
								'telepone'		=> $i->post('telepone'),								
								'tanggal_daftar'=> $i->post('tanggal_daftar'),								
								'avatar'		=> $upload_data['uploads']['file_name']
							);				
				$this->users_model->edit_member($data);
				$this->session->set_flashdata('sukses','Member Telah Ditambah');
				redirect(base_url('admin/users/member'));

				}}else{

				$i = $this->input;
				$data = array(	'id_member'		=> $member['id_member'],
								'nama_depan'	=> $i->post('nama_depan'),
								'nama_belakang'	=> $i->post('nama_belakang'),
								'username'		=> $i->post('username'),
								'email'			=> $i->post('email'),
								'password'		=> sha1($i->post('password')),
								'ttl'			=> $i->post('ttl'),								
								'alamat'		=> $i->post('alamat'),								
								'telepone'		=> $i->post('telepone'),								
								'tanggal_daftar'=> $i->post('tanggal_daftar'),																
							);				
				$this->users_model->edit_member($data);
				$this->session->set_flashdata('sukses','Member Telah Ditambah');
				redirect(base_url('admin/users/member'));					

		}}
		// Default page
		$data = array(	'title'	=> 'Edit Member - '.$site['nama_website'],
						'site'	=> $site,
						'member'=> $member,
						'isi'	=> 'admin/users/member/edit');
		$this->load->view('admin/layout/wrapper',$data);
	}	

	// Delete Admin
	public function delete_admin($id_admin) {
		$data = array('id_admin' => $id_admin);
		$this->users_model->delete($data);		
		$this->session->set_flashdata('sukses','Admin berhasil dihapus');
		redirect(base_url('index.php/admin/users/admin'));
	}

	// Delete Member
	public function hapus_member($id_member) {
		$data = array('id_member' => $id_member);
		$this->users_model->hapus_member($data);		
		$this->session->set_flashdata('sukses','Member berhasil dihapus');
		redirect(base_url('index.php/admin/users/member'));
	}				
}