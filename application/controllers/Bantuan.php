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

class Bantuan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Bantuan_model');
    $this->load->model('Prodi_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Data Calon Bantuan";
    $data['bantuan'] = $this->Bantuan_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_bantuan", $data);
    $this->load->view("layout/footer", $data);
    // 
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Data Bantuan";
    $data['user'] =$this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
    $data['bantuan'] = $this->Bantuan_model->get();
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', ['required' => 'Nama Wajib di isi']);
    $this->form_validation->set_rules('nik', 'NIK', 'required', ['required' => 'NIK Wajib di isi']);
    $this->form_validation->set_rules('jenis_bantuan', 'Jenis Bantuan', 'required', ['required' => 'Jenis Bantuan Wajib di isi']);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Wajib di isi']);
    $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', ['required' => 'No HP Wajib di isi', 'integer' => 'No HP harus Angka']);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin Wajib di isi']);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_tambah_bantuan", $data);
      $this->load->view("layout/footer");
    } else{
      $data = [
        'nama' => $this->input->post('nama'),
        'nik' => $this->input->post('nik'),
        'jenis_bantuan' => $this->input->post('jenis_bantuan'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'no_hp' => $this->input->post('no_hp'),

      ];
      $this->Bantuan_model->insert($data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Calon Bantuan Berhasil DiTambah!</div>');
      redirect('Bantuan');

    }    
  }
  public function hapus($id){
    $this->Bantuan_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data 
    Calon Bantuan Berhasil Dihapus!</div>');
    redirect('Bantuan');
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Data Bantuan";
    $data['bantuan'] = $this->Bantuan_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("mahasiswa/vw_detail_bantuan", $data);
    $this->load->view("layout/footer");
  }
  public function upload(){
    $data = [
      'nama' => $this->input->post('nama'),
      'nik' => $this->input->post('nik'),
      'jenis_bantuan' => $this->input->post('jenis_bantuan'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('no_hp'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    ];
    $this->Bantuan_model->insert($data);
    redirect('Bantuan');
  }

  public function edit($id){
    $data['judul'] = "Halaman Edit Calon Bantuan";
    $data['bantuan'] = $this->Bantuan_model->getById($id);
    $data['user'] = $this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', ['required' => 'Nama Wajib di isi']);
    $this->form_validation->set_rules('nik', 'NIK', 'required', ['required' => 'NIK Wajib di isi']);
    $this->form_validation->set_rules('jenis_bantuan', 'Jenis Bantuan', 'required', ['required' => 'Jenis Bantuan Wajib di isi']);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => 'Alamat Wajib di isi']);
    $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', ['required' => 'No HP Wajib di isi', 'integer' => 'No HP harus Angka']);
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', ['required' => 'Jenis Kelamin  Wajib di isi']);
    if ($this->form_validation->run()==false){
      $this->load->view("layout/header", $data);
      $this->load->view("mahasiswa/vw_ubah_bantuan", $data);
      $this->load->view("layout/footer");
    } else{
      $data = [
        'nama' => $this->input->post('nama'),
        'nik' => $this->input->post('nik'),
        'jenis_bantuan' => $this->input->post('jenis_bantuan'),
        'alamat' => $this->input->post('alamat'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'no_hp' => $this->input->post('no_hp'),
      ];
      $id =$this->input->post('id');
      $this->Bantuan_model->update(['id'=>$id],$data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Calon Bantuan Berhasil DiUbah</div>');
      redirect('Bantuan');
     

    }
  }
}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */