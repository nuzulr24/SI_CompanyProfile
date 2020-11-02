<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slide extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->model('M_barang');
        
    }

    public function index()
    {
        // $data['judul'] = 'Dashboard';
        $data['barang'] = $this->db->get('slide')->result_array();
        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Slide';

        $this->load->view('admin/_partials/header', $data);
        $this->load->view('admin/slide', $data);
        $this->load->view('admin/_partials/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Data Baru';

        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['kode'] = $this->M_barang->kode();
		
        $this->form_validation->set_rules('id', 'produk id', 'trim|required');
        $this->form_validation->set_rules('gambar', 'gambar');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/_partials/header', $data);
            $this->load->view('admin/add_slide', $data);
            $this->load->view('admin/_partials/footer');
        } else {
			
            $this->M_barang->tambahSlide();
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('administrator/slide');
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
