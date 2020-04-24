<?php 

class Model_aset extends CI_Model{

    public function tampil_data(){
        return $this->db->get('tb_aset');
    }

    public function tambah_aset($data, $table){
        $this->db->insert($table, $data);
    }

    public function edit_data_aset($where,$table){
        return $this->db->get_where($table,$where);
    }

    public function update_data_aset($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data_aset($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_aset($kode_aset)
    {
        $result = $this->db->where('kode_aset', $kode_aset)->get('tb_aset');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_aset');
        $this->db->like('id_lokasi', $keyword);
        $this->db->or_like('nama_barang', $keyword);
        $this->db->or_like('spesifikasi', $keyword);
        $this->db->or_like('jumlah', $keyword);
        $this->db->or_like('satuan', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get()->result();
    }
}