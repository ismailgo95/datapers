<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function index()
  {
    if (!$this->session->userdata('email')) {
      redirect('Auth');
    }
    $data = [
      'judul'   => "Dashboard",
      'militer' => $this->M_personalia->getMiliter(),
      'pns'     => $this->M_personalia->getPns(),
      'tks'     => $this->M_personalia->getTks(),
      'user'    => $this->M_personalia->getUser(),
      'users'   => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array()
    ];
    $this->load->view('template/v_header', $data);
    $this->load->view('template/v_sidebar', $data);
    $this->load->view('admin/v_dashboard', $data);
    $this->load->view('template/v_footer');
  }
}
