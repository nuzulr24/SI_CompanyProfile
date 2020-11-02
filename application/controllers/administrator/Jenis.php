<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
    }

    public function index()
    {
        // $data['judul'] = 'Dashboard';
        $data['jenis'] = $this->M_barang->getAllJenis();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Jenis Produk';

        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/jenis', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function tambah()
    {
        $this->form_validation->set_rules('jenis', 'jenis', 'trim|required');

        $this->M_barang->tambahJenis();

        redirect('administrator/jenis');
    }

    public function hapus($jenis)
    {
        $this->M_barang->hapusDataJenis($jenis);
        redirect('administrator/jenis');
    }

       public function tambahgajadi()
    {
        $data['title'] = 'Jenis Baru';

        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jenis', 'jenis', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/_partials/header', $data);
            $this->load->view('admin/add_jenis', $data);
            $this->load->view('admin/_partials/footer');
        } else {
            $this->M_barang->tambahJenis();
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('administrator/jenis');
        }
    }


	

}

/* End of file Jenis.php */
/* Location: ./application/controllers/administrator/Jenis.php */