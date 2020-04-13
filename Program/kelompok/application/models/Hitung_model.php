<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Hitung_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    public function getALT(){
        $query=$this->db->query("SELECT kode_alternatif, nama_alternatif FROM tbl_alternatif ORDER BY kode_alternatif");
        return $query->result();
      }
    public function getKRT(){
        $query=$this->db->query("SELECT kode_kriteria, nama_kriteria, bobot FROM tbl_kriteria ORDER BY kode_kriteria");
        return $query->result();
      }
    public function getdata()
    {
       $rows =  $this->db->query("SELECT a.kode_alternatif, k.kode_kriteria, rl.nilai FROM tbl_alternatif a  INNER JOIN tbl_relasi rl ON rl.kode_alternatif=a.kode_alternatif INNER JOIN tbl_kriteria k ON k.kode_kriteria=rl.kode_kriteria ORDER BY a.kode_alternatif, k.kode_kriteria")->result();
       foreach($rows as $row){$data[$row->kode_alternatif][$row->kode_kriteria] = $row->nilai; }
        return $data;
    }

    public function getJmlBobot()
    {
      $query = $this->db->query("SELECT SUM(bobot) as jumlah_bobot FROM tbl_kriteria");
      return $query->row();
    }
}
