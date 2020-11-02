<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
    }

    public function index()
    {
        // $data['judul'] = 'Dashboard';
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$ouch = $this->db->get_where('kontak', ['id' => 1])->row_array();
		$data['id'] = $ouch['id'];
		$data['email'] = $ouch['email'];
		$data['telp'] = $ouch['telepon'];
		$data['wa'] = $ouch['whatsapp'];
		$data['fb'] = $ouch['facebook'];
		$data['title'] = 'Data Kontak';

		$this->form_validation->set_rules('wa', 'wa', 'trim|required');     
		$this->form_validation->set_rules('telp', 'tlp', 'trim|required');      
		$this->form_validation->set_rules('email', 'email', 'trim|required');     
		$this->form_validation->set_rules('fb', 'fb', 'trim|required');        

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/_partials/header', $data);
            $this->load->view('admin/add_kontak', $data);
            $this->load->view('admin/_partials/footer');
        } else {
            $this->M_barang->updateKontak();
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('administrator/kontak');
        }
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

        $this->form_validation->set_rules('gambar', 'gambar');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/_partials/header', $data);
            $this->load->view('admin/add_fasilitas', $data);
            $this->load->view('admin/_partials/footer');
        } else {
            $this->M_barang->tambahBarang();
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('administrator/fasilitas');
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
        redirect('administrator/fasilitas');
    }
}


/* End of file Product.php */
/* Location: ./application/controllers/administrator/Product.php */
