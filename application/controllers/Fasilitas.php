<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
			$data['title'] = 'Sistem Informasi Penerbangan Notohadinegoro';
			$data['jadwal'] = $this->db->get('fasilitas')->result_array();
			$data['author'] = "Kelompok PKL";
			$this->load->view('user/_partials/header', $data);
			$this->load->view('user/fasilitas',$data);
			$this->load->view('user/_partials/footer',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
