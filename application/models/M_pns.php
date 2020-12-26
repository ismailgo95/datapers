<?php

class M_pns extends CI_Model
{
  public function all()
  {
    return $this->db->get('asn')->result();
  }

  public function create($data)
  {
    return $this->db->insert('asn', $data);
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
  public function ultahPns($cari)
  {
    return $this->db->query("select date_format(asn.tanggal_lahir, '%M') as bulan_lahir, nama as nama,tanggal_lahir as tanggal_lahir, jenis_kelamin as jk, golongan as golongan from asn where date_format(asn.tanggal_lahir, '%M') = '$cari'");
  }
}
