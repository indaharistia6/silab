<?php 

class Model_lokasi extends CI_Model{
    
    public function tampil_data(){
        return $this->db->get('tb_lokasi');
    }

    public function tambah_data($data, $table){
        $this->db->insert($table, $data);
    }


    public function edit_data($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_lokasi');
        $this->db->like('id_prodi', $keyword);
        $this->db->or_like('nama_lab', $keyword);
        return $this->db->get()->result();
    }
}