<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_cust', 'mocust');
	}

	public function index()
	{
		if ($this->session->userdata('email')) 
        {
        	redirect('home');
        }
        
        $this->mocust->rulesRegister(); //memanggil method rule daftar customers

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login - Register';
            $data['my'] = 'My Account';
	        $this->load->view('user/_partials/header', $data);
	        $this->load->view('user/_partials/navigation');
	        $this->load->view('user/account');
	        $this->load->view('user/_partials/footer');
        } else {
            // jika rule terpenuhi
        $this->mocust->processRegister();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Your account has been successfully created</div>');
            redirect('account');
            
        }
	}

	public function login ()
	{
		$this->mocust->rulesLogin(); //memanggil method rule login customers

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login - Register';
	        $this->load->view('user/_partials/header', $data);
	        $this->load->view('user/_partials/navigation');
	        $this->load->view('user/account');
	        $this->load->view('user/_partials/footer');
        } else {
            // jika rule terpenuhi
        	$this->_processLogin();
            
        }	
	}

	private function _processLogin()
	{
  		$email = $this->input->post('email');
  		$password = $this->input->post('password');

  		$customers = $this->db->get_where('customers', ['email' => $email])->row_array();

  		if ($customers) 
  		{
  			if ($customers['status'] == 1) {
  				if (password_verify($password, $customers['password'])) {
  					$data = [
  							'email' => $customers['email'],
  							'name' => $customers['name']
  					];

  					$this->session->set_userdata($data);
  					redirect('home');
  				}else{
  						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong password!</div>');
  						redirect('account');
  				}
  			}else{
  					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">your email has not been verified</div>');
  					redirect('account');
  			}
  		}else{
  				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">your account has not been registered</div>');
  				redirect('account');
  		}

	}

	public function logout()
	{	
		$this->session->unset_userdata('email');
		redirect('account');
	}



}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */