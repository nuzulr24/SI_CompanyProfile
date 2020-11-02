<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model{

  public function ruleDaftarAkun()
  {
    $rule = [
                [ // aturan untuk nama
                  'field'  => 'nama',
                  'label'  => 'Nama',
                  'rules'  => 'required|trim'
                ],

                [ // aturan untuk email
                  'field' => 'email',
                  'label' => 'Email',
                  'rules' => 'required|trim|valid_email|is_unique[user.email]',
                  'errors' => ['is_unique' => 'Email ini telah di gunakan']
                ],

                [
                  'field' => 'username',
                  'label' => 'Username',
                  'rules' => 'required|trim|is_unique[user.username]',
                  'errors' => ['is_unique' => 'Username ini telah di gunakan']
                ],

                [ // aturan untuk password
                  'field' => 'password1',
                  'label' => 'Password',
                  'rules' => 'required|trim|min_length[3]|matches[password2]',
                  'errors' => [
                                'matches' => 'Password tidak sama',
                                'min_length' => 'Password terlalu pendek (min 3 karakter)'
                  ]
                ],

                [ // aturan konfirmasi password
                  'field' => 'password2',
                  'label' => 'Password',
                  'rules' => 'required|trim|matches[password1]'
                ],
            ];
    $this->form_validation->set_rules($rule);
  }

  public function prosesDaftarAkun()
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'username' => $this->input->post('username', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'id_level' => 2,
      'aktiv' => 1,
      'tgl_dibuat' => time()
    ];

    $this->db->insert('user', $data);
  }

}
