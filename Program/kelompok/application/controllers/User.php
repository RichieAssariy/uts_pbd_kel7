<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('account_model');
        $this->load->model('kriteria_model');
        $this->load->model('alternatif_model');
        $this->load->model('hitung_model');
        $this->load->helper('electre_class');

        if (!$this->session->userdata['login']) {
            // redirect(base_url('login'));
            notify('Session Anda Sudah Habis, Silakan Login Ulang', 'Warning', 'login');
          }elseif ($this->session->userdata['level'] != 'user') {
            redirect(base_url('notifError'));
          }
    }


    public function userDashboard()
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
        $data['record_kriteria'] = $this->kriteria_model->countKriteria();
        $data['record_alternatif'] = $this->alternatif_model->countAlternatif();
        $data['view_name'] = "account/user/dashboard";
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
}
