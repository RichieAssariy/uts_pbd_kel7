<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('kriteria_model');
    $this->load->model('alternatif_model');
    $this->load->model('hitung_model');
    $this->load->helper('electre_class');
  }


  public function index()
  {
    $data['view_name'] = "home/home";
    $this->load->view('home/temphome', $data);
  }

  public function homeKriteria()
  {
    $data['kriteria'] = $this->kriteria_model->kriteria();
    $data['view_name'] = "home/kriteria";
    $this->load->view('home/temphome', $data);
  }

  public function homeAlternatif()
  {
    $data['alternatif'] = $this->alternatif_model->Alternatif();
    $data['view_name'] = "home/alternatif";
    $this->load->view('home/temphome', $data);
  }

  public function homeNilaiAhir()
    {
        $rows = $this->hitung_model->getALT();
        foreach($rows as $row){
            $ALT[$row->kode_alternatif] = $row->nama_alternatif;
        } 
        $data['alt'] = $ALT;

        $rows = $this->hitung_model->getKRT();
        foreach($rows as $row){
            $KRT[$row->kode_kriteria] = array(
                'nama_kriteria'=>$row->nama_kriteria,
                'bobot'=>$row->bobot
            );
        }
        $data['krt'] = $KRT;

        foreach($data['krt'] as $key => $val){
            $bobot[$key] = $val['bobot'];
        }
        
        $data['olah'] = $this->hitung_model->getdata();
        $data['electre'] = new Electre($data['olah'], $bobot);
        $data['rank'] = $this->get_rank($data['electre']->total);
        $data['view_name'] = "home/nilaiahir";
        $this->load->view('home/temphome', $data);
    }

    function get_rank($array){
        $data = $array;
        arsort($data);
        $no=1;
        $new = array();
        foreach($data as $key => $value){
            $new[$key] = $no++;
        }
        return $new;
    }

    public function notifError()
    {
        $this->load->view('errors/notiferror');
        // var_dump($this->session->userdata['level']);die;
    }
}