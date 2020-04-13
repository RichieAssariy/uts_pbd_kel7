<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('kriteria_model');
    if (!$this->session->userdata['login']) {
      // redirect(base_url('login'));
      notify('Session Anda Sudah Habis, Silakan Login Ulang', 'Warning', 'login');
    }
  }

  public function listKriteria()
  {
    if ($this->input->post('createkriteria')) {
      $jumlahpara = $this->input->post('jumlahpara');
      // var_dump(is_numeric($jumlahpara));die;
      if (!is_numeric($jumlahpara)) {
        notify('Masukan Angka Valid', 'Warning', 'kriteria/listKriteria');
      } elseif ($this->input->post('jumlahpara') > 5) {
        notify('Maksimal 5 Parameter untuk Sistem ini', 'Warning', 'kriteria/listKriteria');
      }
      elseif ($this->input->post('jumlahpara') == 0||$this->input->post('jumlahpara') == 1) {
        notify('Masukan Jumlah Parameter Lebih dari 1', 'Warning', 'kriteria/listKriteria');
      }else {
        redirect(base_url('createKriteria/' . $this->input->post('jumlahpara')));
      }
    } else {
      $data['kriteria'] = $this->kriteria_model->kriteria();
      $data['view_name'] = "kriteria/kriteria";
      $data['message'] = $this->session->flashdata('msg');
      $this->load->view('temp', $data);
    }
  }

  public function createKriteria($id)
  {
    if ($this->input->post('tambahkriteria')) {
      if (!is_numeric($this->input->post('bobot'))) {
        notify('Gagal Memasukan Data, Bobot Harus Angka', 'error', 'kriteria/listKriteria');
      } else {
        $this->kriteria_model->createkriteria($id);
        notify('Berhasil Menambah Kriteria', 'success', 'kriteria');
      }
    } elseif ($this->input->post('back')) {
      redirect(base_url('kriteria'));
    } else {
      $data['view_name'] = "kriteria/createkriteria";
      $data['gen'] = $this->kriteria_model->getKodeOto('kode_kriteria', 'tbl_kriteria', 'C', 2);
      $data['jumlahpara'] = $id;
      $this->load->view('temp', $data);
    }
  }

  public function updateKriteria($id)
  {
    if ($this->input->post('updatekriteria')) {
      if (!is_numeric($this->input->post('bobot'))) {
        notify('Gagal Mengubah Data, Bobot Harus Angka', 'error', 'kriteria/listKriteria');
      } else {
        $this->kriteria_model->updatekriteria($id);
        notify('Berhasil Mengubah Kriteria', 'success', 'kriteria');
      }
    } elseif ($this->input->post('back')) {
      redirect(base_url('kriteria'));
    } else {
      $data['view_name'] = "kriteria/updatekriteria";
      $data['select'] = $this->kriteria_model->getselectedkriteria($id);
      $data['parameter'] = $this->kriteria_model->getselectedParameter($id);
      $data['jumlah_parameter'] = $this->kriteria_model->countParameter($id);
  
      $this->load->view('temp', $data);
    }
  }

  public function deleteKriteria($id)
  {
    $this->kriteria_model->deleteKriteria($id);
    notify('Berhasil Menghapus Kriteria', 'success', 'kriteria');
  }
}
