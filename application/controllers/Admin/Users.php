<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_users');
  }
  public function index()
  {
    $data = [
      'judul'   => "Users",
      'users'   => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
      'user'    => $this->M_users->all()
    ];
    $this->load->view('template/v_header', $data);
    $this->load->view('template/v_sidebar', $data);
    $this->load->view('users/v_user', $data);
    $this->load->view('template/v_footer');
  }
}
