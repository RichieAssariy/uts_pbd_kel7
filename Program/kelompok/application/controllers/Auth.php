<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
        $this->load->model('account_model');
    }


    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email tidak valid',
            'required' => 'Masukan Email',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'masukan password'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->auth_model->login($email);


        if ($user) {

            if (password_verify($password, $user['password'])) {
                $data = [
                    'login' => true,
                    'id'  => $user['id'],
                    'name'  => $user['name'],
                    'email' => $user['email'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($data);
                if ($user['level'] == 'admin') {
                    notify('Selamat Datang, admin tersayang ', 'success', 'admin');
                } elseif ($user['level'] == 'operator') {
                    notify('Selamat Datang! Operator gadungan', 'success', 'operator');
                } else {
                    notify('Selamat Datang pengguna tercinta', 'success', 'user');
                }
            } else {
                notify('Password salah ', 'error', 'login');
            }
        } else {
            notify('Email tidak terdaftar', 'error', 'login');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim', [
            'required' => 'Masukan Nama'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[aku.email]', [
            'valid_email' => 'Email tidak valid',
            'required' => 'Masukan Email',
            'is_unique' => 'Email sudah ada'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password tidak sama',
            'min_length' => 'password min 3 karakter',
            'required' => 'masukan password'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('registration');
        } else {
            $this->auth_model->registration();
            notify('Selamat Akun Berhasil Dibuat, silakan login kembali', 'success', 'login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        notify('Berhasil Keluar, Silakan Login Kembali', 'warning', '/');
    }

    public function profile()
  {
    $id = $this->session->userdata['id'];
    $data['user'] = $this->account_model->getUser($id);
    $data['dtluser'] = $this->account_model->getDetail($id);
    $data['view_name'] = "account/profile";
    $this->load->view('temp', $data);
  }

  public function editProfile()
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
        $id = $this->session->userdata['id'];
        if ($this->input->post('updateUser')) {
            if ($this->form_validation->run() == true) {
                $this->account_model->updateUser($id);
                $data['account'] = $this->account_model->getUpdatedUser();
                $data_session = array(
                    'login' => true,
                    'id' => $data['account']->id,
                    'email' => $data['account']->email,
                    'name' => $data['account']->name,
                    'level' => $data['account']->level
                );
                $this->session->set_userdata($data_session);
                notify('Selamat Akun Berhasil Diubah', 'success', 'editProfile');
            } else if ($this->form_validation->run() == false) {
                notify('Silakan isi data dengan benar', 'warning', 'editProfile');
            }
        } else {
            $id = $this->session->userdata['id'];
            $data['user'] = $this->account_model->getUser($id);
            $data['dtluser'] = $this->account_model->getDetail($id);
            $data['view_name'] = "account/editprofile";
            $this->load->view('temp', $data);
        }
    }

    

}
