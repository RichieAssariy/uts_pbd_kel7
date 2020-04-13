<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
          }elseif ($this->session->userdata['level'] != 'admin') {
            redirect(base_url('notifError'));
          }

    }


    public function adminDashboard()
    {
        $rows = $this->hitung_model->getALT();
        foreach ($rows as $row) {
            $ALT[$row->kode_alternatif] = $row->nama_alternatif;
        }
        $data['alt'] = $ALT;

        $rows = $this->hitung_model->getKRT();
        foreach ($rows as $row) {
            $KRT[$row->kode_kriteria] = array(
                'nama_kriteria' => $row->nama_kriteria,
                'bobot' => $row->bobot
            );
        }
        $data['krt'] = $KRT;

        foreach ($data['krt'] as $key => $val) {
            $bobot[$key] = $val['bobot'];
        }

        $data['olah'] = $this->hitung_model->getdata();
        $data['electre'] = new Electre($data['olah'], $bobot);
        $data['rank'] = $this->get_rank($data['electre']->total);
        $data['record_admin'] = $this->account_model->countAdmin();
        $data['record_user'] = $this->account_model->countUser();
        $data['record_kriteria'] = $this->kriteria_model->countKriteria();
        $data['record_alternatif'] = $this->alternatif_model->countAlternatif();
        $data['view_name'] = "account/admin/dashboard";
        $this->load->view('temp', $data);
    }

    function get_rank($array)
    {
        $data = $array;
        arsort($data);
        $no = 1;
        $new = array();
        foreach ($data as $key => $value) {
            $new[$key] = $no++;
        }
        return $new;
    }

    public function listUser()
    {
        $data['user'] = $this->account_model->listUser();
        $data['view_name'] = "account/admin/listuser";
        $this->load->view('temp', $data);
    }
    public function listUsernew()
    {
        $data['user'] = $this->account_model->listUser();
        $data['view_name'] = "account/admin/listusernew";
        $this->load->view('temp', $data);
    }

    public function detailUser($id)
    {
        $data['view_name'] = "account/admin/detailUser";
        $data['user'] = $this->account_model->getUser($id);
        $data['dtluser'] = $this->account_model->getDetail($id);
        // var_dump($this->account_model->getDetail($id));
        //die;
        $this->load->view('temp', $data);
    }

    public function updateUser($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Masukan Nama'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email tidak valid',
            'required' => 'Masukan Email',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[3]', [
            'min_length' => 'password min 3 karakter',
        ]);

        if ($this->input->post('updateUser')) {
            if ($this->form_validation->run() == true) {
                $this->account_model->updateUser($id);
                $user = $this->account_model->getUser($id);
                $data['account'] = $this->account_model->getUpdatedUser();
                $data_session = array(
                    'login' => true,
                    'id' => $data['account']->id,
                    'email' => $data['account']->email,
                    'name' => $data['account']->name,
                    'level' => $data['account']->level
                );
                $this->session->set_userdata($data_session);
                notify('Selamat Akun Berhasil Diubah', 'success', 'detailUser/' . $user->id);
            } else if ($this->form_validation->run() == false) {
                $data['user'] = $this->account_model->getUser($id);
                $data['dtluser'] = $this->account_model->getDetail($id);
                $data['view_name'] = "account/admin/updateuser";
                $this->load->view('temp', $data);
            }
        } else {
            $data['user'] = $this->account_model->getUser($id);
            $data['dtluser'] = $this->account_model->getDetail($id);
            $data['view_name'] = "account/admin/updateuser";
            $this->load->view('temp', $data);
        }
    }

    public function createUser()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Masukan Nama'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[aku.email]', [
            'valid_email' => 'Email tidak valid',
            'required' => 'Masukan Email',
            'is_unique' => 'Email sudah ada'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'password min 3 karakter',
            'required' => 'masukan password'
        ]);

        if ($this->input->post('createUser')) {
            if ($this->form_validation->run() == true) {
                $this->account_model->createUser();
                notify('Selamat Akun Berhasil Dibuat', 'success', 'createUser');
            } elseif ($this->form_validation->run() == false) {
                $data['view_name'] = "account/admin/createuser";
                $this->load->view('temp', $data);
            }
        } else {
            $data['view_name'] = "account/admin/createuser";
            $this->load->view('temp', $data);
        }
    }

    public function deleteUser($id)
    {
        $this->account_model->deleteUser($id);
        notify('Akun Berhasil Dihapus', 'success', 'listUser');
    }
}
