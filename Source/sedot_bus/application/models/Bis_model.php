<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Bis_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        // Daftar bis
        public function daftar_bis() {
            $this->db->select('*');
            $this->db->from('bis');
            $this->db->join('terminal','terminal.id_terminal = bis.id_terminal','LEFT');                                     
            $this->db->order_by('id_bis','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Detail bis
        public function detail_bis($id_bis) {
            $this->db->select('*');
            $this->db->from('bis');
            $this->db->join('terminal','terminal.id_terminal = bis.id_terminal','LEFT');                                                 
            $this->db->where('id_bis', $id_bis);
            $this->db->order_by('id_bis','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }        

        // Tambah bis
        public function tambah_bis($data) {
            $this->db->insert('bis',$data);
        }         

        // Edit bis
        public function edit_bis($data) {
            $this->db->where('id_bis',$data['id_bis']);
            $this->db->update('bis',$data);
        }

        // Hapus bis
        public function hapus_bis($data) {
            $this->db->where('id_bis',$data['id_bis']);
            $this->db->delete('bis',$data);
        }          
}