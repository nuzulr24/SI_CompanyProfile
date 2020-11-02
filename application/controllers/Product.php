<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang');
	}

	public function index()
	{	
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->M_barang->getAllBarang();
		$data['jenis'] = $this->db->get('jenis')->result_array();
		$data['title'] = 'Product';
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/_partials/navigation');
		$this->load->view('user/product', $data);
		$this->load->view('user/_partials/footer');
	}

	public function galeri_view($id)
	{
		$data['barang'] = $this->db->get_where('barang', ['id' => $id])->row_array();
		$data['title'] = 'Product View';
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/_partials/navigation');
		$this->load->view('user/product_view', $data);
		$this->load->view('user/_partials/footer');
	}

	public function jenis($jenis)
	{
		$data['barang'] = $this->M_barang->select_jenis($jenis);
		$data['jenis'] = $this->db->get('jenis')->result_array();
		$data['title'] = 'Product';
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/_partials/navigation');
		$this->load->view('user/product', $data);
		$this->load->view('user/_partials/footer');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
