<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Kota_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        // Daftar Kota
        public function daftar_kota() {
            $this->db->select('*');
            $this->db->from('kota');
            $this->db->order_by('id_kota','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Detail Kota
        public function detail_kota($id_kota) {
            $this->db->select('*');
            $this->db->from('kota');
            $this->db->where('id_kota', $id_kota);
            $this->db->order_by('id_kota','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }        

        // Tambah Kota
        public function tambah_kota($data) {
            $this->db->insert('kota',$data);
        }         

        // Edit Kota
        public function edit_kota($data) {
            $this->db->where('id_kota',$data['id_kota']);
            $this->db->update('kota',$data);
        }

        // Hapus Kota
        public function hapus_kota($data) {
            $this->db->where('id_kota',$data['id_kota']);
            $this->db->delete('kota',$data);
        }          
}