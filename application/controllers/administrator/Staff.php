<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
    }

    public function index()
    {
        // $data['judul'] = 'Dashboard';
        $data['barang'] = $this->M_barang->getAllBarang();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Staff';

        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/staff', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function detail($id)
    {
        // $data['judul'] = 'Dashboard';
        $data['barang'] = $this->db->get_where('barang', ['id' => $id])->row_array();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Produk';

        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/detail_product', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Data Baru';

        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jenis'] = $this->db->get('jenis')->result_array();
        $data['kode'] = $this->M_barang->kode();

        $this->form_validation->set_rules('id', 'produk id', 'trim|required');

        $this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');

        $this->form_validation->set_rules('gambar', 'gambar');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/_partials/header', $data);
            $this->load->view('admin/add_staff', $data);
            $this->load->view('admin/_partials/footer');
        } else {
            $this->M_barang->tambahBarangg();
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('administrator/staff');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Barang';
        $data['barang'] = $this->db->get_where('barang', ['id' => $id])->row_array();
        $data['jenis_barang'] = $this->db->get('jenis')->result_array();

        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('id', 'produk id', 'trim|required');

        $this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');

        $this->form_validation->set_rules('jenis', 'jenis produk', 'required');

        $this->form_validation->set_rules('gambar', 'gambar');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/_partials/header', $data);
            $this->load->view('admin/edit_product', $data);
            $this->load->view('admin/_partials/footer');
        } else {
            $this->M_barang->editBarang();
            $this->session->set_flashdata('messageedit', '<div class="alert alert-outline alert-success">Data berhasil diubah!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('administrator/produk');
        }
    }

    public function hapus($id)
    {
        $this->M_barang->hapusData($id);
        redirect('administrator/staff');
    }
}


/* End of file Product.php */
/* Location: ./application/controllers/administrator/Product.php */
