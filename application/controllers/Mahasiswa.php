<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Mahasiswa
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Mahasiswa extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Mahasiswa";
    $data['mahasiswa'] = $this->Mahasiswa_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_mahasiswa", $data);
    $this->load->view("layout/footer", $data);
    // 
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Mahasiswa";
    $data['user'] =$this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', ['required' => 'Nama Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('nim', 'NIM', 'required', ['required' => 'NIM Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('prodi', 'Prodi', 'required', ['required' => 'Prodi Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', ['required' => 'Asal Sekolah Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', ['required' => 'No HP Mahasiswa Wajib di isi', 'integer' => 'No HP harus Angka']);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Mahasiswa Wajib di isi']);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
      $this->load->view("layout/footer");
    } else{
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'no_hp' => $this->input->post('no_hp'),
        'asal_sekolah' => $this->input->post('asal_sekolah'),
      ];
      $this->Mahasiswa_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil DiTambah!</div>');
      redirect('Mahasiswa');

    }    
  }
  public function hapus($id){
    $this->Mahasiswa_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data 
    Mahasiswa Berhasil Dihapus!</div>');
    redirect('Mahasiswa');
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Mahasiswa";
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
    $this->load->view("layout/footer");
  }
  public function upload(){
    $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'email' => $this->input->post('email'),
      'prodi' => $this->input->post('prodi'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'asal_sekolah' => $this->input->post('asal_sekolah')
    ];
    $this->Mahasiswa_model->insert($data);
    redirect('Mahasiswa');
  }

  public function edit($id){
    $data['judul'] = "Halaman Edit Mahasiswa";
    $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
    $data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
    $data['prodi'] = $this->Prodi_model->get();
    $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', ['required' => 'Nama Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('nim', 'NIM', 'required', ['required' => 'NIM Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('prodi', 'Prodi', 'required', ['required' => 'Prodi Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', ['required' => 'Asal Sekolah Mahasiswa Wajib di isi']);
    $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', ['required' => 'No HP Mahasiswa Wajib di isi', 'integer' => 'No HP harus Angka']);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Mahasiswa Wajib di isi']);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
      $this->load->view("layout/footer");
    } else{
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'email' => $this->input->post('email'),
        'prodi' => $this->input->post('prodi'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'no_hp' => $this->input->post('no_hp'),
        'asal_sekolah' => $this->input->post('asal_sekolah'),
      ];
      $id =$this->input->post('id');
      $this->Mahasiswa_model->update(['id'=>$id],$data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil DiUbah</div>');
      redirect('Mahasiswa');
     

    }
  }
}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */