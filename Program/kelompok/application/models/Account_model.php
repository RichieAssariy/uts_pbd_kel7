<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Account_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }


    //Admin Function
    public function countAdmin()
    {
        //$query = $this->db->get('count_admin');
        $query = $this->db->query("SELECT COUNT(id) as jumlah_admin FROM aku WHERE level='admin'");
        return $query->row();
    }

    public function countUser()
    {
        //$query = $this->db->get('count_admin');
        $query = $this->db->query("SELECT COUNT(id) as jumlah_user FROM aku WHERE level='user' OR LEVEL='operator'");
        return $query->row();
    }

    public function listUser()
  {
       $query=$this->db->query("SELECT * FROM aku ORDER BY id");
       return $query->result();
  }

  public function createUser()
    {
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d');
        
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'level' => htmlspecialchars($this->input->post('account', true)),
            'date_created' => $now,
        ];

         $data2 = [
             
            'name' => htmlspecialchars($this->input->post('name', true)),
            'image' => 'default.jpg',
            'phone' => htmlspecialchars($this->input->post('phone', true)),
            'address' => htmlspecialchars($this->input->post('address', true)),
            'city' => htmlspecialchars($this->input->post('city', true)),
            'country' => htmlspecialchars($this->input->post('country', true)),
            'note' => htmlspecialchars($this->input->post('note', true)),
            'date_created' => $now,
        ]; 

        $this->db->insert('aku', $data);
        $this->db->insert('kamu', $data2);
    }

    public function deleteUser($id)
    {
      $where = array(
        'id' => $id
       );
      $this->db->delete('aku',$where);
      $this->db->delete('kamu',$where);
    }
    

   public function getUser($id)
  {
    $where = array(
      'id' => $id
     );

     $query = $this->db->get_where('aku',$where);
     return $query->row();
  }

    public function getDetail($id)
  {
    $where = array(
      'id' => $id  
     );

     $query = $this->db->get_where('kamu',$where);
     return $query->row();
  }

  public function updateUser($id)
    {
        date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
        $now = date('Y-m-d');
        
        $where = array(
            'id' => $id  
           );
           if ($this->input->post('password')=="") {
        $data = [
          'name' => htmlspecialchars($this->input->post('name', true)),
          'email' => htmlspecialchars($this->input->post('email', true)),
          'level' => htmlspecialchars($this->input->post('account', true)),
          'date_created' => $now,
        ];

         $data2 = [
             
            'name' => htmlspecialchars($this->input->post('name', true)),
            'image' => 'default.jpg',
            'phone' => htmlspecialchars($this->input->post('phone', true)),
            'address' => htmlspecialchars($this->input->post('address', true)),
            'city' => htmlspecialchars($this->input->post('city', true)),
            'country' => htmlspecialchars($this->input->post('country', true)),
            'note' => htmlspecialchars($this->input->post('note', true)),
            'date_created' => $now,
        ]; 
      } else{
        $data = [
          'name' => htmlspecialchars($this->input->post('name', true)),
          'email' => htmlspecialchars($this->input->post('email', true)),
          'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
          'level' => htmlspecialchars($this->input->post('account', true)),
          'date_created' => $now,
      ];

       $data2 = [
           
          'name' => htmlspecialchars($this->input->post('name', true)),
          'image' => 'default.jpg',
          'phone' => htmlspecialchars($this->input->post('phone', true)),
          'address' => htmlspecialchars($this->input->post('address', true)),
          'city' => htmlspecialchars($this->input->post('city', true)),
          'country' => htmlspecialchars($this->input->post('country', true)),
          'note' => htmlspecialchars($this->input->post('note', true)),
          'date_created' => $now,
      ]; 
      }

        $this->db->update('aku', $data,$where);
        $this->db->update('kamu', $data2,$where);
    }

    public function getUpdatedUser()
  {
    $where = array('id' => $this->session->userdata['id']);
     $query = $this->db->get_where('aku',$where);
     return $query->row();

  }

}
