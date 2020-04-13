<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Nilai_model extends CI_Model{
  public function __construct(){
      $this->load->database();
  }

  public function getNilai(){
      $query = $this->db->query("SELECT a.kode_alternatif, k.kode_kriteria, rl.nilai
          FROM tbl_relasi rl
          INNER JOIN tbl_alternatif a
            ON rl.kode_alternatif=a.kode_alternatif
          INNER JOIN tbl_kriteria k
            ON k.kode_kriteria=rl.kode_kriteria
          ORDER BY a.kode_alternatif, k.kode_kriteria");
      $rows = $query->result();
      
      $data = array();
      foreach($rows as $row){
          $data[$row->kode_alternatif][$row->kode_kriteria] = $row->nilai;
      }

      return $data;
  }

  public function getListParameter()
  {
    $query = $this->db->query("SELECT a.nama_kriteria, b.nama_parameter FROM tbl_kriteria as a INNER JOIN tbl_parameter as b ON a.kode_kriteria = b.kode_kriteria");
    return $query->result();
  }

  public function getAlternatif(){
    $this->db->order_by("kode_alternatif", "ASC");
    $query = $this->db->get("tbl_alternatif");

    return $query->result();
  }

  public function getCountKriteria(){
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM tbl_kriteria");
    return $query->row();
  }

  public function getKriteria()
  {
       $query=$this->db->query("SELECT * FROM tbl_kriteria ORDER BY kode_kriteria");
       return $query->result();
  }

  public function getListForm($id){
//    $query = $this->db->query("SELECT ra.ID, k.kode_kriteria, k.nama_kriteria,ra.nilai FROM tbl_relasi ra INNER JOIN tbl_kriteria k ON k.kode_kriteria=ra.kode_kriteria  WHERE kode_alternatif='$id' ORDER BY kode_kriteria");
    
return $this->db->query('SELECT a.ID, a.kode_kriteria, a.nilai ,b.nama_parameter,c.nama_kriteria FROM tbl_relasi as a INNER JOIN tbl_parameter as b on (a.kode_kriteria = b.kode_kriteria and a.nilai= b.nilai_parameter), tbl_kriteria as c WHERE kode_alternatif= "'.$id.'" and c.kode_kriteria = a.kode_kriteria ORDER BY kode_kriteria')->result();
  }

  public function getSelectedAlternatif($id){
    $query = $this->db->query("SELECT * FROM tbl_alternatif WHERE kode_alternatif='$id'");
    return $query->row();
  }
  
  public function updateNilai($id, $kriteria, $value)
  {
    //var_dump($id.' == '.$kriteria.'===='.$value);die;


    $where = array('kode_alternatif' => $id, 'kode_kriteria' => $kriteria );
    $data = array(
        'nilai' => $value,
    );
    $this->db->where($where);
    $this->db->update('tbl_relasi',$data);
  }

}