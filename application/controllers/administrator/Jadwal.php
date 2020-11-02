<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
				$this->load->model('M_cust');
				$this->load->model('M_barang');
  }

  function index()
  {
    $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Admin - Jadwal';
    $data['customers'] = $this->M_cust->getAllCust();

    $this->load->view('admin/_partials/header', $data);
    $this->load->view('admin/jadwal', $data);
    $this->load->view('admin/_partials/footer');
  }

	public function tambah()
    {
        $data['title'] = 'Data Baru';

        $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jenis'] = $this->db->get('jenis')->result_array();
        $data['kode'] = $this->M_barang->kode();

        $this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
				$this->form_validation->set_rules('jam_tiba', 'jam_tiba', 'trim|required');
				$this->form_validation->set_rules('jam_berangkat', 'jam_berangkat', 'trim|required');
				$this->form_validation->set_rules('tujuan', 'tujuan', 'trim|required');
        $this->form_validation->set_rules('kategori', 'kategori', 'trim');
        

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/_partials/header', $data);
            $this->load->view('admin/add_jadwal', $data);
            $this->load->view('admin/_partials/footer');
        } else {
            $this->M_barang->tambahdata();
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('administrator/jadwal');
        }
    }

  public function detail($customer_id)
  {
      // $data['judul'] = 'Dashboard';
      $data['customers'] = $this->db->get_where('customers', ['customer_id' => $customer_id])->row_array();
      $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['title'] = 'Admin - Customers';

      $this->load->view('admin/_partials/header', $data);
      $this->load->view('admin/detail_cust', $data);
      $this->load->view('admin/_partials/footer');
  }

  public function hapus($customer_id)
  {
      $this->M_cust->hapusData($customer_id);
      redirect('administrator/jadwal');
  }

}


/* End of file Customers.php */
/* Location: ./application/controllers/administrator/Customers.php */
