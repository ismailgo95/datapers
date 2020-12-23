<?php

class M_personalia extends CI_Model
{
  public function getMiliter()
  {
    return $this->db->get('militer')->num_rows();
  }
  public function getPns()
  {
    return $this->db->get('asn')->num_rows();
  }
  public function getTks()
  {
    return $this->db->get('tks')->num_rows();
  }
  public function getUser()
  {
    return $this->db->get('users')->num_rows();
  }
}
