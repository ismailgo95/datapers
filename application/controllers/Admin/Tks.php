<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tks extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_tks');
    $this->load->library('form_validation');
  }
  public function index()
  {
    if (!$this->session->userdata('email')) {
      redirect('Auth');
    }
    $cari = $this->input->post('bulan');
    $data = [
      'judul'         => "DATA TKS",
      'data_tks'      => $this->M_tks->all(),
      'ultah'         => $this->M_tks->ultahTks($cari)->result(),
      'users'         => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
    ];
    $this->load->view('template/v_header', $data);
    $this->load->view('template/v_sidebar', $data);
    $this->load->view('tks/v_tks', $data);
    $this->load->view('tks/__footer');
  }
  public function create()
  {
    $data['nama']             = htmlspecialchars($this->input->post('nama'));
    $data['golongan']         = htmlspecialchars($this->input->post('golongan'));
    $data['jenis_kelamin']    = $this->input->post('jenis_kelamin');
    $data['nit']              = $this->input->post('nit');
    $data['tempat_lahir']     = htmlspecialchars($this->input->post('tempat_lahir'));
    $data['tanggal_lahir']    = $this->input->post('tanggal_lahir');
    $data['golongan_darah']   = htmlspecialchars($this->input->post('golongan_darah'));
    $data['penugasan']        = htmlspecialchars($this->input->post('penugasan'));
    $data['nomor_sprint_tks'] = htmlspecialchars($this->input->post('nomor_sprint_tks'));
    $data['tmt']              = htmlspecialchars($this->input->post('tmt'));
    $data['pendidikan']       = htmlspecialchars($this->input->post('pendidikan'));
    $data['status_dinas']     = htmlspecialchars($this->input->post('status_dinas'));
    $this->M_tks->create($data);
    $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data Berhasil ditambahkan!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ');
    redirect('Admin/Tks');
  }

  public function update()
  {
    $id                   = ($this->input->post('id'));
    $nama                 = htmlspecialchars($this->input->post('nama'));
    $golongan             = htmlspecialchars($this->input->post('golongan'));
    $jenis_kelamin        = $this->input->post('jenis_kelamin');
    $nit                  = htmlspecialchars($this->input->post('nit'));
    $tempat_lahir         = htmlspecialchars($this->input->post('tempat_lahir'));
    $tanggal_lahir        = $this->input->post('tanggal_lahir');
    $golongan_darah       = $this->input->post('golongan_darah');
    $penugasan            = htmlspecialchars($this->input->post('penugasan'));
    $nomor_sprint_tks     = htmlspecialchars($this->input->post('nomor_sprint_tks'));
    $tmt                  = htmlspecialchars($this->input->post('tmt'));
    $pendidikan           = htmlspecialchars($this->input->post('pendidikan'));
    $status_dinas         = htmlspecialchars($this->input->post('status_dinas'));
    $data   = array(
      'id'                => $id,
      'nama'              => $nama,
      'golongan'          => $golongan,
      'jenis_kelamin'     => $jenis_kelamin,
      'nit'               => $nit,
      'tempat_lahir'      => $tempat_lahir,
      'tanggal_lahir'     => $tanggal_lahir,
      'golongan_darah'    => $golongan_darah,
      'penugasan'         => $penugasan,
      'nomor_sprint_tks'  => $nomor_sprint_tks,
      'tmt'               => $tmt,
      'pendidikan'        => $pendidikan,
      'status_dinas'      => $status_dinas,
    );
    $where  = array(
      'id' => $id
    );
    $this->M_tks->update('tks', $data, $where);
    $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data Berhasil diupdate!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ');
    redirect('Admin/Tks');
  }

  public function delete($id)
  {
    $where = array('id' => $id);
    $this->M_tks->delete_data($where, 'tks');
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ');
    redirect('Admin/Tks');
  }
}
