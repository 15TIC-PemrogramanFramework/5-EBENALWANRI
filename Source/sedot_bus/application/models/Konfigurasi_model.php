<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Konfigurasi_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        // Daftar Tabel Konfigurasi
        public function daftar_konfigurasi() {
            $this->db->select('*');
            $this->db->from('konfigurasi');
            $this->db->order_by('id_konfigurasi','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }

        // Edit Konfigurasi
        public function edit($data) {
            $this->db->where('id_konfigurasi',$data['id_konfigurasi']);
            $this->db->update('konfigurasi',$data);
        }        
    }