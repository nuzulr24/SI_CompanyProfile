<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Sistem Informasi Penerbangan Notohadinegoro';
		$data['profile'] = $this->db->get_where('about', ['id' => 1])->result_array();
		$data['kontak'] = $this->db->get_where('kontak', ['id' => 1])->result_array();
		$data['author'] = "Kelompok PKL";
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/about',$data);
		$this->load->view('user/_partials/footer',$data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
