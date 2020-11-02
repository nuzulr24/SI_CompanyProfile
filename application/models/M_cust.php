<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_cust extends CI_Model {

	  public function rulesRegister()
	  {
	    $rule = [

	    			[ // aturan untuk Name
	                  'field' => 'name',
	                  'label' => 'Name',
	                  'rules' => 'required|trim',
	                  'errors' => ['required' => 'Name field is required']
	                ],

	    			[ // aturan untuk email
	                  'field' => 'email',
	                  'label' => 'Email',
	                  'rules' => 'required|trim|valid_email|is_unique[customers.email]',
	                  'errors' => ['is_unique' => 'This email already used',
	                 														'required' => 'Email field is required']
	                ],

	                [ // aturan untuk password
	                  'field' => 'password1',
	                  'label' => 'Password',
	                  'rules' => 'required|trim|min_length[6]|max_length[30]|matches[password2]|alpha_numeric|password_check[1,1,1]',
	                  'errors' => [
	                                'matches' => 'Password not matches',
	                                'min_length' => 'Password is too short',
	                                'max_length' => 'Password is too long',
	                 				'required' => 'Password field is required'
	                              ]
	                ],

	                [ // aturan konfirmasi password
	                  'field' => 'password2',
	                  'label' => 'Password',
	                  'rules' => 'required|trim|matches[password1]'
	                ],

	                [ // aturan untuk address
	                  'field'  => 'address',
	                  'label'  => 'Address',
	                  'rules'  => 'required|trim',
	                  'errors' => ['required' => 'Address field is required']
	                ],

	                [ // aturan untuk city
	                  'field'  => 'city',
	                  'label'  => 'City',
	                  'rules'  => 'required|trim',
	                  'errors' => ['required' => 'City field is required']
	                ],

	                [ // aturan untuk province
	                  'field'  => 'province',
	                  'label'  => 'Province',
	                  'rules'  => 'required|trim',
	                  'errors' => ['required' => 'State field is required']
	                ],

	                [ // aturan untuk country
	                  'field'  => 'country',
	                  'label'  => 'Country',
	                  'rules'  => 'required|trim',
	                  'errors' => ['required' => 'Country field is required']
	                ],

	                [ // aturan untuk zipcode
	                  'field'  => 'zipcode',
	                  'label'  => 'Zipcode',
	                  'rules'  => 'required|trim|numeric',
	                  'errors' => [
									'required' => 'Zip Code field is required',
									'numeric' => 'Only filled with number'
								  ]
	                ],

	                [ // aturan untuk name
	                  'field'  => 'phonenumber',
	                  'label'  => 'Phone Number',
	                  'rules'  => 'required|trim|numeric',
	                  'errors' => [
									'required' => 'Phone Number field is required',
									'numeric' => 'Only filled with number'
								  ]
	                ],

	                [ // aturan untuk zipcode
	                  'field'  => 'date_created',
	                  'label'  => 'Date Created',
	                  'rules'  => 'trim'
	                ]
	                
	            ];
	    $this->form_validation->set_rules($rule);
	  }

	  public function processRegister()
	  {
	    $data = [
	      'name' => $this->input->post('name', true),
	      'email' =>$this->input->post('email', TRUE),
	      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
	      'address' => $this->input->post('address', true),
	      'city' => $this->input->post('city', true),
	      'province' => $this->input->post('province', true),
	      'country' => $this->input->post('country', true),
	      'zipcode' => $this->input->post('zipcode', true),
	      'phonenumber' => $this->input->post('phonenumber', true),
	      'status' => 0,
	      'date_created' => $this->input->post('date_created', true)
	    ];

	    $this->db->insert('customers', $data);
	  }

	  public function rulesLogin()
	  {
	  		$rule = 
	  		[
	  					[ // aturan untuk email
          'field' => 'email',
          'label' => 'Email',
          'rules' => 'required|trim',
          'errors' => ['required' => 'Email field is required']
        ],

        [ // aturan untuk password
          'field' => 'password',
          'label' => 'Password',
          'rules' => 'required|trim',
          'errors' => ['required' => 'Password field is required']
        ],
	  		];
	  		$this->form_validation->set_rules($rule);
	  	
	  }


		public function getAllCust()
		{
			return $this->db->get('jadwal_penerbangan')->result_array();
		}

		public function hapusData($customer_id)
		{
			$this->db->where('id', $customer_id);
			$this->db->delete('jadwal_penerbangan');
		}

}

/* End of file M_cust.php */
/* Location: ./application/models/M_cust.php */
