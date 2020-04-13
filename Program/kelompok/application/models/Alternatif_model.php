<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Alternatif_model extends CI_Model{
  public function __construct(){
      $this->load->database();
  }
  private function insertIntoRelasi($id)
{
  $this->db->query("INSERT INTO tbl_relasi(kode_alternatif, kode_kriteria) SELECT '$id', kode_kriteria FROM tbl_kriteria");
       return;
}

 private function deleteRelasi($id)
{
  $where = array(
    'kode_alternatif' => $id
   );
  $this->db->delete('tbl_relasi',$where);
}

  public function Alternatif()
  {
       $query=$this->db->query("SELECT * FROM tbl_alternatif ORDER BY kode_alternatif");
       return $query->result();
  }

  public function createAlternatif()
  {
      $data = array(
        'kode_alternatif' => $this->input->post('kode_alternatif'),
        'nama_alternatif' => $this->input->post('nama_alternatif'),
       );
       $this->db->insert('tbl_alternatif',$data);
      //  $this->insertIntoRelasi($this->input->post('kode_alternatif'));
  }

  public function createNilai($id){
    $data = array(
      'kode_kriteria' => $id,
      'kode_alternatif' => $this->input->post('kode_alternatif'),
      'nilai' => $this->input->post('ID-'. $id),
     );

    //  var_dump($data); die;
     $this->db->insert('tbl_relasi',$data);
  }

  public function getListForm(){
    $query = $this->db->query("SELECT  k.kode_kriteria, k.nama_kriteria FROM tbl_kriteria k  ORDER BY kode_kriteria");
    return $query->result();
  }

  public function getselectedalternatif($id)
  {
    $where = array(
      'kode_alternatif' => $id
     );

     $query = $this->db->get_where('tbl_alternatif',$where);
    // var_dump($id);die;
     return $query->row();
  }

  public function updateAlternatif($id)
  {
    $where = array('kode_alternatif' => $id );
    $data = array(
      'kode_alternatif' => $this->input->post('kode_alternatif'),
      'nama_alternatif' => $this->input->post('nama_alternatif'),
    );
    $this->db->where($where);
    $this->db->update('tbl_alternatif',$data);
  }

  public function deleteAlternatif($id)
    {
      $this->deleteRelasi($id);
      $where = array(
        'kode_alternatif' => $id
       );
      $this->db->delete('tbl_alternatif',$where);
    }

    public function countAlternatif()
  {
        //$query = $this->db->get('count_admin');
       $query=$this->db->query("SELECT COUNT(kode_alternatif) as jumlah_alternatif FROM tbl_alternatif");
        return $query->row();
  }

  public function getKodeOto($field, $table, $prefix, $length)
  {
      global $db;
      $var = $this->db->query("SELECT $field FROM $table WHERE $field REGEXP '{$prefix}[0-9]{{$length}}' ORDER BY $field DESC");

      $var = $var->row_array()[$field];

      if($var){
          return $prefix . substr( str_repeat('0', $length) . (substr($var, - $length) + 1), - $length );
      } else {
          return $prefix . str_repeat('0', $length - 1) . 1;
      }
  }


  public function getParameter()
  {
    return $this->db->get('tbl_parameter')->result();
  }
}