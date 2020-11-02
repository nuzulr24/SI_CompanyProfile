<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
		$data['title'] = 'Sistem Informasi Penerbangan Notohadinegoro';
		$data['slide'] = $this->db->get('slide')->result_array();
		$query = $this->db->get_where('sambutan', ['id' => 1])->row_array();
		$data['nama'] = $query['name'];
		$data['caption'] = $query['caption'];
		$data['photo'] = $query['photo'];
		$data['jabatan'] = $query['jabatan'];
			$data['author'] = "Kelompok PKL";
			$this->load->view('user/_partials/header', $data);
			$this->load->view('user/utama',$data);
			$this->load->view('user/_partials/footer',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
