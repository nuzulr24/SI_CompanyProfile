<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
			$data['title'] = 'Sistem Informasi Penerbangan Notohadinegoro';
			$data['jadwal'] = $this->db->get('staff')->result_array();
			$data['author'] = "Kelompok PKL";
			$this->load->view('user/_partials/header', $data);
			$this->load->view('user/anggota',$data);
			$this->load->view('user/_partials/footer',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
