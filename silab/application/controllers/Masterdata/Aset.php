<?php

class Aset extends CI_Controller{

    public function index()
    {
        $data['silab'] = $this->model_aset->tampil_data()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('aset', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $id_lokasi       = $this->input->post('id_lokasi');
        $nama_barang     = $this->input->post('nama_barang');
        $spesifikasi     = $this->input->post('spesifikasi');
        $jumlah          = $this->input->post('jumlah');
        $satuan          = $this->input->post('satuan');
        $keterangan      = $this->input->post('keterangan');
        $foto            = $_FILES['foto'];
        if ($foto=''){}else{
            $config ['upload_path']     = './assets/foto';
            $config ['allowed_types']   = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo "Gambar Gagal Diupload!"; die();
            }else {
                $foto=$this->upload->data('file_name');
            }
        }

        $data = array(
            'id_lokasi'         => $id_lokasi,
            'nama_barang'       => $nama_barang,
            'spesifikasi'       => $spesifikasi,
            'jumlah'            => $jumlah,
            'satuan'            => $satuan,
            'keterangan'        => $keterangan,
            'foto'              => $foto,

        );

        $this->model_aset->tambah_aset($data, 'tb_aset');
        redirect('masterdata/aset/index');
    }

    ////////////////////////////////////////////////////////////

    public function edit($kode_aset)
    {
        $where = array('kode_aset' =>$kode_aset);
        $data['silab'] = $this->model_aset->edit_data_aset($where,'tb_aset')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('edit_aset',$data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $kode_aset      = $this->input->post('kode_aset');
        $id_lokasi      = $this->input->post('id_lokasi');
        $nama_barang    = $this->input->post('nama_barang');
        $spesifikasi    = $this->input->post('spesifikasi');
        $jumlah         = $this->input->post('jumlah');
        $satuan         = $this->input->post('satuan');
        $keterangan     = $this->input->post('keterangan');
        $foto           = $this->input->post('foto');

        $data = array(
            'id_lokasi'    => $id_lokasi,
            'nama_barang'  => $nama_barang,
            'spesifikasi'  => $spesifikasi,
            'jumlah'       => $jumlah,
            'satuan'       => $satuan,
            'keterangan'   => $keterangan,
            'foto'         => $foto,
        );

        $where = array(
            'kode_aset'    => $kode_aset
        );

        $this->model_aset->update_data_aset($where,$data,'tb_aset');
        redirect('masterdata/aset/index');
    }

    /////////////////////////////////////////////////////////////

    public function hapus($kode_aset)
    {
        $where  = array ('kode_aset' => $kode_aset);
        $this->model_aset->hapus_data_aset($where, 'tb_aset');
        redirect('masterdata/aset/index');
    }

    ////////////////////////////////////////////////////////////

    public function detail($kode_aset)
    {
        $data['silab'] = $this->model_aset->detail_aset($kode_aset);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_aset', $data);
        $this->load->view('templates/footer');
    }

    /////////////////////////////////////////////////////////

    public function search()
    {
        $keyword      = $this->input->post('keyword');
        $data['silab']= $this->model_aset->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('aset', $data);
        $this->load->view('templates/footer');

    }

}