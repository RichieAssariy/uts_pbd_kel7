<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('alternatif_model');
    if (!$this->session->userdata['login']) {
      // redirect(base_url('login'));
      notify('Session Anda Sudah Habis, Silakan Login Ulang', 'Warning', 'login');
    }
  }


  public function listAlternatif()
  {
    $data['alternatif'] = $this->alternatif_model->Alternatif();
    var_dump($data['alternatif']);die;
    $data['view_name'] = "alternatif/alternatif";
    $data['message'] = $this->session->flashdata('msg');
    $this->load->view('temp', $data);
  }

  public function createAlternatif()
  {
    if ($this->input->post('createalternatif')) {
      foreach ($this->input->post() as $key => $val) {
        if (strpos($key, "ID-") !== false) {
          $k = str_replace('ID-', '', $key);
          $this->alternatif_model->createNilai($k);
        }
      }
      $this->alternatif_model->createAlternatif();
      notify('Berhasil Membuat Alternatif', 'success', 'alternatif');
    } elseif ($this->input->post('back')) {
      redirect(base_url('alternatif'));
    } else {
      $data["form"] = $this->alternatif_model->getListForm();
      $data['view_name'] = "alternatif/createalternatif";
      $data['gen'] = $this->alternatif_model->getKodeOto('kode_alternatif', 'tbl_alternatif', 'A', 2);
      $data['parameter'] = $this->alternatif_model->getParameter();
      $this->load->view('temp', $data);
    }
  }

  public function updateAlternatif($id)
  {
    if ($this->input->post('updatealternatif')) {
      $this->alternatif_model->updateAlternatif($id);
      notify('Berhasil Merubah Alternatif', 'success', 'alternatif');
    } elseif ($this->input->post('back')) {
      redirect(base_url('alternatif'));
    } else {
      $data['view_name'] = "alternatif/updatealternatif";
      $data['alt'] = $this->alternatif_model->getselectedalternatif($id);
      $this->load->view('temp', $data);
    }
  }

  public function deleteAlternatif($id)
  {
    $this->alternatif_model->deleteAlternatif($id);
    notify('Berhasil MenghapusAlternatif', 'success', 'alternatif/listAlternatif');
  }
}
