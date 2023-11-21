<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Auth
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller AUTH
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model', 'userrole');
  }

  public function index()
  {
    if ($this->session->userdata('email')){
      redirect('Mahasiswa');
    }
    $this->form_validation->set_rules('email', 'Email','trim|required|valid_email',[
      'valid_email'=>'Email Harus Valid',
      'required'=>'Email Wajib di isi'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'trim|required',[
      'requaired'=>'Password Wajib diisi'
    ]);
    if($this->form_validation->run()==false){
      $this->load->view('layout/auth_header');
      $this->load->view('auth/login');
      $this->load->view('layout/auth_foother');
    } else{
      $this->cek_login();
    }

    // 
  }
  public function registrasi()
  {
    if ($this->session->userdata('email')){
      redirect('Mahasiswa');
    }
    $this->form_validation->set_rules('nama', 'Nama','required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
      'is_unique'=>'Email ini sudah terdaftar!',
      'valid_email'=> 'Email Harus Valid',
      'required'=>'Email Wajib Di isi'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]|matches[password1]');
    if($this->form_validation->run()==false){
      $data['title'] = 'Registration';
      $this->load->view('layout/auth_header', $data);
      $this->load->view('auth/register');
      $this->load->view('layout/auth_foother');
    } else{
      $data = [
        'nama'=>htmlspecialchars($this->input->post('nama', true)),
        'email'=>htmlspecialchars($this->input->post('email', true)),
        'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'gambar'=>'default.jpg',
        'role'=>"User",
        'data_created'=>time()
      ];
      $this->userrole->insert($data);
      $this->session->set_flashdata('message', '<div class="alert-seccess" role="alert">
      Selamat! Akunmu telah berhasil terdaftar, Silahkan Login! </div');
      redirect('auth');
    }
    
    // 
  }
  public function cek_regis()
  {
    $data = [
      'nama' => htmlspecialchars($this->input->post('nama', true)),
      'email' => htmlspecialchars($this->input->post('email', true)),
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'gambar' => 'default.jpg',
      'role' => "User",
      'data_created' => time()
    ];
    $this->userrole->insert($data);
    $this->session->set_flashdata('message','<div class"alert-success" role="alert">
    Selamat Akunmu telah berhasil terdaftar, Silahkan Login!</div>');
    redirect('Auth');
    // 
  }

  public function cek_login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    if($user){
      if (password_verify($password, $user['password'])){
        $data = [
          'email' => $user['email'],
          'role' => $user['role'],
          'id' => $user['id'],
        ];
        $this->session->set_userdata($data);
        if ($user['role'] == 'Admin'){
          redirect('Mahasiswa');
        } else{
          redirect('Profile');
        }
      } else{
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah!</div>');
        redirect('auth');
      }
    } else{
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar! </div>');
      redirect('auth');
    }
  }
  
  public function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('role');
    $this->session->set_flashdata('message', '<div class="elert-success" role="alert">Berhasil Lougout! </div>');
    redirect('Auth');
    // 
  }

}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */