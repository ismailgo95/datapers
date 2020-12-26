<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pns extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pns');
    $this->load->library('form_validation');
  }
  public function index()
  {
    if (!$this->session->userdata('email')) {
      redirect('Auth');
    }
    $cari = $this->input->post('bulan');
    $data = [
      'judul'         => "DATA PNS",
      'data_pns'      => $this->M_pns->all(),
      'ultah'         => $this->M_pns->ultahPns($cari)->result(),
      'users'         => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
    ];
    $this->load->view('template/v_header', $data);
    $this->load->view('template/v_sidebar');
    $this->load->view('pns/v_pns', $data);
    $this->load->view('template/v_footer');
  }
  public function create()
  {
    $data['nama']               = htmlspecialchars($this->input->post('nama'));
    $data['nip']                = htmlspecialchars($this->input->post('nip'));
    $data['jenis_kelamin']      = $this->input->post('jenis_kelamin');
    $data['golongan']           = $this->input->post('golongan');
    $data['tmt']                = htmlspecialchars($this->input->post('tmt'));
    $data['golongan_darah']     = $this->input->post('golongan_darah');
    $data['jabatan']            = htmlspecialchars($this->input->post('jabatan'));
    $data['tmt_jabatan']        = $this->input->post('tmt_jabatan');
    $data['masa_kerja']         = $this->input->post('masa_kerja');
    $data['nama_jabatan']       = htmlspecialchars($this->input->post('nama_jabatan'));
    $data['tahun_jabatan']      = $this->input->post('tahun_jabatan');
    $data['status_dinas']       = htmlspecialchars($this->input->post('status_dinas'));
    $data['pendidikan']         = htmlspecialchars($this->input->post('pendidikan'));
    $data['tahun_pendidikan']   = $this->input->post('tahun_pendidikan');
    $data['ijazah']             = $this->input->post('ijazah');
    $data['tanggal_lahir']      = $this->input->post('tanggal_lahir');
    $this->M_pns->create($data);
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
    $nip                  = htmlspecialchars($this->input->post('nip'));
    $jenis_kelamin        = htmlspecialchars($this->input->post('jenis_kelamin'));
    $golongan             = htmlspecialchars($this->input->post('golongan'));
    $tmt                  = htmlspecialchars($this->input->post('tmt'));
    $golongan_darah       = htmlspecialchars($this->input->post('golongan_darah'));
    $jabatan              = ($this->input->post('jabatan'));
    $tmt_jabatan          = ($this->input->post('tmt_jabatan'));
    $masa_kerja           = ($this->input->post('masa_kerja'));
    $nama_jabatan         = htmlspecialchars($this->input->post('nama_jabatan'));
    $tahun_jabatan        = htmlspecialchars($this->input->post('tahun_jabatan'));
    $status_dinas         = ($this->input->post('status_dinas'));
    $pendidikan           = ($this->input->post('pendidikan'));
    $tahun_pendidikan     = htmlspecialchars($this->input->post('tahun_pendidikan'));
    $ijazah               = htmlspecialchars($this->input->post('ijazah'));
    $tanggal_lahir        = ($this->input->post('tanggal_lahir'));
    $data   = array(
      'id'                => $id,
      'nama'              => $nama,
      'nip'               => $nip,
      'jenis_kelamin'     => $jenis_kelamin,
      'golongan'          => $golongan,
      'tmt'               => $tmt,
      'golongan_darah'    => $golongan_darah,
      'jabatan'           => $jabatan,
      'tmt_jabatan'       => $tmt_jabatan,
      'masa_kerja'        => $masa_kerja,
      'nama_jabatan'      => $nama_jabatan,
      'tahun_jabatan'     => $tahun_jabatan,
      'status_dinas'      => $status_dinas,
      'pendidikan'        => $pendidikan,
      'tahun_pendidikan'  => $tahun_pendidikan,
      'ijazah'            => $ijazah,
      'tanggal_lahir'     => $tanggal_lahir
    );
    $where  = array(
      'id' => $id
    );
    $this->M_pns->update('asn', $data, $where);
    $this->session->set_flashdata('pesan', '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Data Berhasil diupdate!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        ');
    redirect('Admin/Pns');
  }

  public function delete($id)
  {
    $where = array('id' => $id);
    $this->M_pns->delete_data($where, 'asn');
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data Berhasil dihapus!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      ');
    redirect('Admin/Pns');
  }

  public function mpdf()
  {
    $mpdf = new \Mpdf\Mpdf();
    $data_pns = $this->M_pns->all();
    $data = $this->load->view('pns/mpdf', ['pns' => $data_pns], TRUE);
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
    $sheet->setCellValue('E1', 'Golongan');

    $pns = $this->M_pns->all();
    $no = 1;
    $x = 2;
    foreach ($pns as $row) {
      $sheet->setCellValue('A' . $x, $no++);
      $sheet->setCellValue('B' . $x, $row->nama);
      $sheet->setCellValue('C' . $x, $row->jenis_kelamin);
      $sheet->setCellValue('D' . $x, $row->jabatan);
      $sheet->setCellValue('E' . $x, $row->golongan);
      $x++;
    }
    $writer = new Xlsx($spreadsheet);
    $filename = 'Data Personalia Pns';

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }
}
