<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function registration()
    {
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d');

        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password1'), PASSWORD_BCRYPT),
            'level' => 'admin',
            'date_created' => $now,
        ];

         $data2 = [
             
            'name' => htmlspecialchars($this->input->post('name', true)),
            'image' => 'default.jpg',
            'phone' => htmlspecialchars(""),
            'address' => htmlspecialchars(""),
            'city' => htmlspecialchars(""),
            'country' => htmlspecialchars(""),
            'note' => htmlspecialchars(""),
            'date_created' => $now,
        ]; 

        $this->db->insert('aku', $data);
        $this->db->insert('kamu', $data2);
    }

    public function login($email)
    {
        return $this->db->get_where('aku', ['email' => $email])->row_array();
    }


}
