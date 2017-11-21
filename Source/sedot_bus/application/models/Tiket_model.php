<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Tiket_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        // Daftar tiket
        public function daftar_tiket() {
            $this->db->select('*');
            $this->db->from('tiket');       
            $this->db->join('terminal','terminal.id_terminal = tiket.id_terminal','LEFT');                         
            $this->db->join('bis','bis.id_bis = tiket.id_bis','LEFT');                 
            $this->db->order_by('id_tiket','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Detail tiket
        public function detail_tiket($id_tiket) {
            $this->db->select('*');
            $this->db->from('tiket');
            $this->db->join('terminal','terminal.id_terminal = tiket.id_terminal','LEFT');                         
            $this->db->join('bis','bis.id_bis = tiket.id_bis','LEFT');                         
            $this->db->where('id_tiket', $id_tiket);
            $this->db->order_by('id_tiket','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }        

        // Tambah tiket
        public function tambah_tiket($data) {
            $this->db->insert('tiket',$data);
        }         

        // Edit tiket
        public function edit_tiket($data) {
            $this->db->where('id_tiket',$data['id_tiket']);
            $this->db->update('tiket',$data);
        }

        // Hapus tiket
        public function hapus_tiket($data) {
            $this->db->where('id_tiket',$data['id_tiket']);
            $this->db->delete('tiket',$data);
        }          
}