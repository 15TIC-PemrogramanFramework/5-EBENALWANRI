<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pembayaran_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();
        }

        // Daftar Pembayaran
        public function daftar_pembayaran() {
            $this->db->select(' pembayaran.id_bayar,
                                pembayaran.status,
                                pembayaran.tanggal_bayar,
                                pembayaran.keterangan,
                                member.nama_depan,
                                member.nama_belakang,
                                pembayaran.status,
                                tiket.nama_tiket,
                            ');
            $this->db->from('pembayaran');
            $this->db->join('member','member.id_member = pembayaran.id_member','LEFT');                         
            $this->db->join('tiket','tiket.id_tiket = pembayaran.id_tiket','LEFT');                         
            $this->db->order_by('id_bayar','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Detail pembayaran
        public function detail_pembayaran($id_bayar) {
            $this->db->select('*');
            $this->db->from('pembayaran');
            $this->db->where('id_bayar', $id_bayar);
            $this->db->order_by('id_bayar','ASC');
            $query = $this->db->get();
            return $query->row_array();
        }        

        // Tambah pembayaran
        public function tambah_pembayaran($data) {
            $this->db->insert('pembayaran',$data);
        }         

        // Edit pembayaran
        public function edit_pembayaran($data) {
            $this->db->where('id_bayar',$data['id_bayar']);
            $this->db->update('pembayaran',$data);
        }

        // Hapus pembayaran
        public function hapus_pembayaran($data) {
            $this->db->where('id_bayar',$data['id_bayar']);
            $this->db->delete('pembayaran',$data);
        }          
}