<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tks extends CI_Model
{

  public function all()
  {
    return $this->db->get('tks')->result();
  }

  public function create($data)
  {
    return $this->db->insert('tks', $data);
  }
  public function update($table, $data, $where)
  {
    $this->db->update($table, $data, $where);
  }
  public function delete_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
