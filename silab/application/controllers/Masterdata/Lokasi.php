<?php

class Lokasi extends CI_Controller{

    public function index()
    {
        $data['silab'] = $this->model_lokasi->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('lokasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $id_prodi       = $this->input->post('id_prodi');
        $nama_lab       = $this->input->post('nama_lab');

        $data = array(
            'id_prodi'          => $id_prodi,
            'nama_lab'          => $nama_lab,
        );

        $this->model_lokasi->tambah_data($data, 'tb_lokasi');
        redirect('masterdata/lokasi/index');
    }

    //////////////////////////////////////////////////////////////////

    public function edit($id_lokasi)
    {
        $where = array('id_lokasi' =>$id_lokasi);
        $data['silab'] = $this->model_lokasi->edit_data($where,'tb_lokasi')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_lokasi',$data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id_lokasi      = $this->input->post('id_lokasi');
        $id_prodi       = $this->input->post('id_prodi');
        $nama_lab       = $this->input->post('nama_lab');

        $data = array(
            'id_prodi'     => $id_prodi,
            'nama_lab'     => $nama_lab,
        );

        $where = array(
            'id_lokasi'    => $id_lokasi
        );

        $this->model_lokasi->update_data($where,$data,'tb_lokasi');
        redirect('masterdata/lokasi/index');
    }

    //////////////////////////////////////////////////////////

    public function hapus($id_lokasi)
    {
        $where  = array ('id_lokasi' => $id_lokasi);
        $this->model_lokasi->hapus_data($where, 'tb_lokasi');
        redirect('masterdata/lokasi/index');
    }

    /////////////////////////////////////////////////////////

    public function search()
    {
        $keyword      = $this->input->post('keyword');
        $data['silab']= $this->model_lokasi->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('lokasi', $data);
        $this->load->view('templates/footer');

    }
}