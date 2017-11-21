<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Kontak_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        // Daftar Kontak
        public function daftar_kontak() {
            $this->db->select('*');
            $this->db->from('kontak');
            $this->db->order_by('id_kontak','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Detail kontak
        public function detail_kontak($id_kontak) {
            $this->db->select('*');
            $this->db->from('kontak');
            $this->db->where('id_kontak', $id_kontak);
            $this->db->order_by('id_kontak','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }        

        // Tambah kontak
        public function kirim($data) {
            $this->db->insert('kontak',$data);
        }         

        // Edit kontak
        public function edit_kontak($data) {
            $this->db->where('id_kontak',$data['id_kontak']);
            $this->db->update('kontak',$data);
        }

        // Hapus kontak
        public function hapus_kontak($data) {
            $this->db->where('id_kontak',$data['id_kontak']);
            $this->db->delete('kontak',$data);
        }          
}