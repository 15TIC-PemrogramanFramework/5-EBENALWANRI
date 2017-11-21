<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Users_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        // Daftar Tabel Admin
        public function daftar_admin() {
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->order_by('id_admin','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Detail Tabel Admin
        public function detail_admin($id_admin) {
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('id_admin', $id_admin);
            $query = $this->db->get();
            return $query->row_array();
        }

        // Daftar Tabel Member
        public function daftar_member() {
            $this->db->select('*');
            $this->db->from('member');
            $this->db->order_by('id_member','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Detail Tabel Member
        public function detail_member($id_member) {
            $this->db->select('*');
            $this->db->from('member');
            $this->db->where('id_member', $id_member);
            $this->db->order_by('id_member','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }        

        // Tambah Admin
        public function create($data) {
            $this->db->insert('admin',$data);
        }

        // Tambah Member
        public function tambah_member($data) {
            $this->db->insert('member',$data);
        }        

        // Edit Member
        public function edit_member($data) {
            $this->db->where('id_member',$data['id_member']);
            $this->db->update('member',$data);
        }

        // Hapus Admin
        public function delete($data) {
            $this->db->where('id_admin',$data['id_admin']);
            $this->db->delete('admin',$data);
        }

        // Hapus Member
        public function hapus_member($data) {
            $this->db->where('id_member',$data['id_member']);
            $this->db->delete('member',$data);
        }                               
}