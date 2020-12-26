<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Militer extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_militer');
    $this->load->library('form_validation');
  }
  public function index()
  {
    if (!$this->session->userdata('email')) {
      redirect('Auth');
    }
    $cari = $this->input->post('bulan');
    $data = [
      'judul'         => "DATA MILITER",
      'data_militer'  => $this->M_militer->all(),
      'pangkat'       => $this->M_militer->get_pangkat()->result(),
      'ultah'         => $this->M_militer->ultahMiliter($cari)->result(),
      'users'         => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
    ];
    $this->load->view('template/v_header', $data);
    $this->load->view('template/v_sidebar');
    $this->load->view('militer/v_militer', $data);
    $this->load->view('template/v_footer');
  }

  public function create()
  {
    $data['nama']                 = htmlspecialchars($this->input->post('nama'));
    $data['jenis_kelamin']        = htmlspecialchars($this->input->post('jenis_kelamin'));
    $data['tempat_lahir']         = htmlspecialchars($this->input->post('tempat_lahir'));
    $data['tanggal_lahir']        = htmlspecialchars($this->input->post('tanggal_lahir'));
    $data['golongan_darah']       = htmlspecialchars($this->input->post('golongan_darah'));
    $data['agama']                = ($this->input->post('agama'));
    $data['id_pangkat']           = ($this->input->post('id_pangkat'));
    $data['tmt_pangkat']          = ($this->input->post('tmt_pangkat'));
    $data['nrp']                  = htmlspecialchars($this->input->post('nrp'));
    $data['jabatan']              = htmlspecialchars($this->input->post('jabatan'));
    $data['tmt_jabatan']          = ($this->input->post('tmt_jabatan'));
    $data['tmt_tni']              = ($this->input->post('tmt_tni'));
    $data['pendidikan_umum']      = htmlspecialchars($this->input->post('pendidikan_umum'));
    $data['pendidikan_militer']   = htmlspecialchars($this->input->post('pendidikan_militer'));
    $data['status']               = ($this->input->post('status'));
    $data['status_dinas']         = 'Aktif';
    $this->M_militer->create($data);
    $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data Berhasil ditambahkan!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ');
    redirect('Admin/Militer');
  }

  public function update()
  {
    $id                   = ($this->input->post('id'));
    $nama                 = htmlspecialchars($this->input->post('nama'));
    $jenis_kelamin        = htmlspecialchars($this->input->post('jenis_kelamin'));
    $tempat_lahir         = htmlspecialchars($this->input->post('tempat_lahir'));
    $tanggal_lahir        = htmlspecialchars($this->input->post('tanggal_lahir'));
    $golongan_darah       = htmlspecialchars($this->input->post('golongan_darah'));
    $agama                = ($this->input->post('agama'));
    $id_pangkat           = ($this->input->post('id_pangkat'));
    $tmt_pangkat          = ($this->input->post('tmt_pangkat'));
    $nrp                  = htmlspecialchars($this->input->post('nrp'));
    $jabatan              = htmlspecialchars($this->input->post('jabatan'));
    $tmt_jabatan          = ($this->input->post('tmt_jabatan'));
    $tmt_tni              = ($this->input->post('tmt_tni'));
    $pendidikan_umum      = htmlspecialchars($this->input->post('pendidikan_umum'));
    $pendidikan_militer   = htmlspecialchars($this->input->post('pendidikan_militer'));
    $status               = ($this->input->post('status'));
    $status_dinas         = 'Aktif';
    $data   = array(
      'id'                  => $id,
      'nama'                => $nama,
      'jenis_kelamin'       => $jenis_kelamin,
      'tempat_lahir'        => $tempat_lahir,
      'tanggal_lahir'       => $tanggal_lahir,
      'golongan_darah'      => $golongan_darah,
      'agama'               => $agama,
      'id_pangkat'          => $id_pangkat,
      'nrp'                 => $nrp,
      'tmt_pangkat'         => $tmt_pangkat,
      'tmt_tni'             => $tmt_tni,
      'tmt_jabatan'         => $tmt_jabatan,
      'jabatan'             => $jabatan,
      'pendidikan_umum'     => $pendidikan_umum,
      'pendidikan_militer'  => $pendidikan_militer,
      'status'              => $status,
      'status_dinas'        => $status_dinas
    );
    $where  = array(
      'id' => $id
    );
    $this->M_militer->update('militer', $data, $where);
    $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data Berhasil diupdate!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ');
    redirect('Admin/Militer');
  }

  public function delete($id)
  {
    $where = array('id' => $id);
    $this->M_militer->delete_data($where, 'militer');
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ');
    redirect('Admin/Militer');
  }

  public function __rules()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    // $this->form_validation->set_rules('email', 'Email', 'required');
    // $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required');
    // $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
    // $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
    // $this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'required');
    // $this->form_validation->set_rules('agama', 'Agama', 'required');
    // $this->form_validation->set_rules('id_pangkat', 'Nama Pangkat', 'required');
    // $this->form_validation->set_rules('nrp', 'Nrp', 'required');
    // $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
    // $this->form_validation->set_rules('tmt_pangkat', 'TMT Pangkat', 'required');
    // $this->form_validation->set_rules('tmt_tni', 'TMT Tni', 'required');
    // $this->form_validation->set_rules('tmt_jabatan', 'TMT Jabatan', 'required');
    // $this->form_validation->set_rules('pendidikan_umum', 'Pendidikan Umum', 'required');
    // $this->form_validation->set_rules('pendidikan_militer', 'Pendidikan Militer', 'required');
    // $this->form_validation->set_rules('status', 'Status', 'required');
  }

  public function mpdf()
  {
    $mpdf = new \Mpdf\Mpdf();
    $data_militer = $this->M_militer->all();
    $data = $this->load->view('militer/mpdf', ['militer' => $data_militer], TRUE);
    $mpdf->WriteHTML($data);
    $mpdf->Output();
  }
  public function excel()
  {

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'Nama');
    $sheet->setCellValue('D1', 'Jenis Kelamin');
    $sheet->setCellValue('D1', 'Jabatan');
    $sheet->setCellValue('E1', 'Nama Pangkat');

    $militer = $this->M_militer->all();
    $no = 1;
    $x = 2;
    foreach ($militer as $row) {
      $sheet->setCellValue('A' . $x, $no++);
      $sheet->setCellValue('B' . $x, $row->nama);
      $sheet->setCellValue('C' . $x, $row->jenis_kelamin);
      $sheet->setCellValue('D' . $x, $row->jabatan);
      $sheet->setCellValue('E' . $x, $row->nama_pangkat);
      $x++;
    }
    $writer = new Xlsx($spreadsheet);
    $filename = 'Data Personalia Militer';

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }

  public function detail($id)
  {
    if (!$this->session->userdata('email')) {
      redirect('Auth');
    }
    $where = array('id' => $id);
    $data = [
      'judul'         => "DATA CV MILITER",
      'data_militer'  => $this->M_militer->getAll($where, 'militer'),
      'pangkat'       => $this->M_militer->get_pangkat()->result(),
      'users'         => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
    ];
    $this->load->view('template/v_header', $data);
    $this->load->view('template/v_sidebar');
    $this->load->view('militer/cv_militer', $data);
    $this->load->view('template/v_footer');
  }
}
