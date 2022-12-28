<?php defined('BASEPATH') or exit('No direct script access allowed');

class Paket_Model extends CI_Model
{
    public function getAllPaket()
    {
        return $this->db->get('paket')->result_array();
    }

    public function tambahDataPaket()
    {
        $data = [
            'nama_paket' => $this->input->post('nama_paket'),
            'tipe_paket' => $this->input->post('tipe_paket'),
            'harga' => $this->input->post('harga'),
        ];

        $this->db->insert('paket', $data);
    }

    public function hapusDataPaket($id_paket)
    {
        $this->db->where('id_paket', $id_paket);
        $this->db->delete('paket');
    }

    public function editDataPaket()
    {
        $data = [
            'nama_paket' => $this->input->post('nama_paket'),
            'tipe_paket' => $this->input->post('tipe_paket'),
            'harga' => $this->input->post('harga'),
        ];

        $this->db->where('id_paket', $this->input->post('id'));
        $this->db->update('paket', $data);
    }

    public function getPaketById($id_paket)
    {
        // $this->db->where('id_paket', $id_paket);
        return $this->db->get_where('paket', ['id_paket' => $id_paket])->row_array();
    }
}
