<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_militer extends CI_Model
{

  public function all()
  {
    return $this->db->query("SELECT * FROM militer a inner join pangkat b on a.id_pangkat = b.id_pangkat ORDER BY a.id_pangkat ASC")->result();
  }
  public function get_pangkat()
  {
    return $this->db->get('pangkat');
  }
  public function create($data)
  {
    return $this->db->insert('militer', $data);
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
  public function ultahMiliter($cari)
  {
    return $this->db->query("select date_format(militer.tanggal_lahir, '%M') as bulan_lahir, nama as nama, tanggal_lahir as tanggal_lahir,  jabatan as jabatan, jenis_kelamin as jenis_kelamin from militer where date_format(militer.tanggal_lahir, '%M') = '$cari'");
  }
}
