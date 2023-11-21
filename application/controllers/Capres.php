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

class Capres extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Capres_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Capres";
    $data['Capres'] = $this->Capres_model->get();
    $this->load->view("layout/header", $data);
    $this->load->view("mahasiswa/vw_capres", $data);
    $this->load->view("layout/footer", $data);
    // 
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah capres";
    $data['capres'] = $this->Capres_model->get();
    $this->load->view("layout/header");
    $this->load->view("mahasiswa/vw_tambah_capres", $data);
    $this->load->view("layout/footer");
  }
  public function hapus($id){
    $this->Capres_model->delete($id);
    redirect('Capres');
  }
  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Capres";
    $data['capres'] = $this->Capres_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("mahasiswa/vw_detail_capres", $data);
    $this->load->view("layout/footer");
  }
  public function upload(){
    $data = [
        'nik' => $this->input->post('nik'),
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'asal' => $this->input->post('asal'),
        'partai_pendukung' => $this->input->post('partai_pendukung'),
        'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
        'umur' => $this->input->post('umur')
    ];
    $this->Capres_model->insert($data);
    redirect('Capres');
  }

  public function edit($id){
    $data['judul'] = "Halaman Edit Capres";
    $data['capres'] = $this->Capres_model->getById($id);
    $this->load->view('layout/header', $data);
    $this->load->view('mahasiswa/vw_ubah_capres', $data);
    $this->load->view('layout/footer');
  }
  public function update(){
    $data = [
      'nik' => $this->input->post('nik'),
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'asal' => $this->input->post('asal'),
      'partai_pendukung' => $this->input->post('partai_pendukung'),
      'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
      'umur' => $this->input->post('umur')
    ];
    $id = $this->input->post('id');
    $this->Capres_model->update(['id' => $id], $data);
    redirect('Capres');
  }
}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */