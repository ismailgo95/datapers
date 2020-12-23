<?php

class M_users extends CI_Model
{
  public function all()
  {
    return $this->db->get('users')->result();
  }
}
