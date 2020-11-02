<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['title'] = 'Citra Medja Indonesia - Love & Life';
		$data['author'] = "Citra Medja Indonesia";
		$this->load->view('user/kontak',$data);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */
