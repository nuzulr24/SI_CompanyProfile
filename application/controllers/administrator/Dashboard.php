<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
		if(!isset($_SESSION['email'])) {
			redirect('auth');
		} else {
    // $data['judul'] = 'Dashboard';
    $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Halaman Utama Administrator';
    $b = $this->db->query("SELECT * FROM barang");
    $data['jumlah'] = $b->num_rows();

    $this->load->view('admin/_partials/header', $data);
    $this->load->view('admin/dashboard',$data);
    $this->load->view('admin/_partials/footer');
  }
}
}
