<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Terminal_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        // Daftar terminal
        public function daftar_terminal() {
            $this->db->select('*');
            $this->db->from('terminal');     
            $this->db->join('kota','kota.id_kota = terminal.id_kota','LEFT');                                         
            $this->db->order_by('id_terminal','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Detail terminal
        public function detail_terminal($id_terminal) {
            $this->db->select('*');
            $this->db->from('terminal');
            $this->db->join('kota','kota.id_kota = terminal.id_kota','LEFT');                         
            $this->db->where('id_terminal', $id_terminal);
            $this->db->order_by('id_terminal','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }        

        // Tambah terminal
        public function tambah_terminal($data) {
            $this->db->insert('terminal',$data);
        }         

        // Edit terminal
        public function edit_terminal($data) {
            $this->db->where('id_terminal',$data['id_terminal']);
            $this->db->update('terminal',$data);
        }

        // Hapus terminal
        public function hapus_terminal($data) {
            $this->db->where('id_terminal',$data['id_terminal']);
            $this->db->delete('terminal',$data);
        }          
}