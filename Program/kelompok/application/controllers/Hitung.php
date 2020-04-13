<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('hitung_model');
        $this->load->helper('electre_class');
        if (!$this->session->userdata['login']) {
            // redirect(base_url('login'));
            notify('Session Anda Sudah Habis, Silakan Login Ulang', 'Warning', 'login');
          }
    }
    

    public function hitung()
    {
        $a = $this->hitung_model->getJmlBobot();
        if($a->jumlah_bobot == 100){
            
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
        //var_dump($data['olah']);die;
        $data['view_name'] = "hitung/hitung";
        $this->load->view('temp', $data);
        }else{
            notify('Silakan Sesuaikan Nilai Bobot Maksimal 100', 'warning', 'kriteria');
        }
    }

    public function nilaiAhir()
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
        $data['view_name'] = "hitung/nilaiahir";
        $this->load->view('temp', $data);
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

    public function map()
    {
        $data['view_name'] = "hitung/map";
        $this->load->view('temp', $data);
    }
}
