<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Kriteria_model extends CI_Model{
  public function __construct(){
      $this->load->database();
  }

//Fungsi Otomatis CRUD Relasi//
private function insertIntoRelasi($id)
{
  $this->db->query("INSERT INTO tbl_relasi(kode_alternatif, kode_kriteria, nilai) SELECT kode_alternatif, '$id', 0  FROM tbl_alternatif");
       return;
}

private function deleteRelasi($id)
{
  $where = array(
    'kode_kriteria' => $id
   );
  $this->db->delete('tbl_relasi',$where);
}

//Fungsi Otomatis CRUD Parameter//
private function insertIntoParameter($id,$parameter, $value)
{
  $data = array(
    'kode_kriteria' => $id,
    'nama_parameter' => $parameter,   
    'nilai_parameter' => $value
  );  
  return $this->db->insert('tbl_parameter', $data);

}

public function countParameter($id)
  {     
     $query=$this->db->query('select count(kode_parameter) as jumlah_parameter from tbl_parameter where kode_kriteria = "'.$id.'"');
     return $query->row();
  }

public function getselectedParameter($id)
  {
    $where = array(
      'kode_kriteria' => $id
     );

     $query = $this->db->from('tbl_parameter')->where($where)->order_by('nilai_parameter', 'ASC')->get();
    //  $query = $this->db->query("SELECT * FROM tbl_parameter WHERE $where ORDER BY kode_kriteria");
     return $query->result();
  }

  private function updateParameter($id,$parameter, $value)
{
  $where = array(
    'kode_kriteria' => $id,
    'nilai_parameter' => $value
  );
  
  $data = array(
    'nama_parameter' => $parameter,   
  );  
  $this->db->where($where);
  return $this->db->update('tbl_parameter', $data);

}

private function deleteParameter($id)
{
  $where = array(
    'kode_kriteria' => $id
   );
  $this->db->delete('tbl_parameter',$where);
}


//Fungsi Kriteria//
  public function kriteria()
  {
       $query=$this->db->query("SELECT * FROM tbl_kriteria ORDER BY kode_kriteria");
       return $query->result();
  }

  public function createkriteria($id)
  {
      $jPar = 0;
      $data = array(
        'kode_kriteria' => $this->input->post('kode_kriteria'),
        'nama_kriteria' => $this->input->post('nama_kriteria'),
        'bobot' => $this->input->post('bobot'),
       );
       for($i=0; $i<$id; $i++){
         if ($this->input->post('par'.$i)!='') {
          $jPar = $i;
        }
       }
       $this->db->insert('tbl_kriteria',$data);
       $this->insertIntoRelasi($this->input->post('kode_kriteria'));

       for($i=0; $i<=$jPar; $i++){
        $this->insertIntoParameter($this->input->post('kode_kriteria'), $this->input->post('par'.$i),$i);
       }
  }
  
  public function getselectedkriteria($id)
  {
    $where = array(
      'kode_kriteria' => $id
     );

     $query = $this->db->get_where('tbl_kriteria',$where);
     return $query->row();
  }

  public function updatekriteria($id)
  {
    $where = array('kode_kriteria' => $id );
    $data = array(
      'kode_kriteria' => $this->input->post('kode_kriteria'),
        'nama_kriteria' => $this->input->post('nama_kriteria'),
        'bobot' => $this->input->post('bobot'),
    );
    $this->db->where($where);
    $this->db->update('tbl_kriteria',$data);
    for($i=0; $i< $this->countParameter($id)->jumlah_parameter; $i++){
      $this->updateParameter($id, $this->input->post('par'.$i),$i);
    }
  }

  public function deletekriteria($id)
    {
      $this->deleteRelasi($id);
      $this->deleteParameter($id);
      $where = array(
        'kode_kriteria' => $id
       );
      $this->db->delete('tbl_kriteria',$where);
    }

    public function countKriteria()
  {
        //$query = $this->db->get('count_admin');
       $query=$this->db->query("SELECT COUNT(kode_kriteria) as jumlah_kriteria FROM tbl_kriteria");
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
  

}