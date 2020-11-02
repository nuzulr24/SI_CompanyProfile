<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->model('M_barang');
        
    }

    public function index()
    {
        // $data['judul'] = 'Dashboard';
        $data['barang'] = $this->db->get('files')->result_array();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data File';

        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/file', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Data Baru';

        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kode'] = $this->M_barang->kode();
		
        $this->form_validation->set_rules('id', 'file id', 'trim|required');
        $this->form_validation->set_rules('gambar', 'gambar');
        $this->form_validation->set_rules('title', 'nama dokumen');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/_partials/header', $data);
            $this->load->view('admin/add_file', $data);
            $this->load->view('admin/_partials/footer');
        } else {
			
            $this->M_barang->tambahFile();
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('administrator/file');
        }
    }


    public function hapus($id)
    {
		$this->load->model('M_barang');
        $this->M_barang->hapusSlide($id);
        redirect('administrator/slide');
    }
}


/* End of file Product.php */
/* Location: ./application/controllers/administrator/Product.php */
