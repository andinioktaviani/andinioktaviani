<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function index()
  {
    $data['tittle'] = 'My Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->Userdata('email')])->row_array();



    $this->load->view('templates/header.php', $data);
    $this->load->view('templates/sidebar.php', $data);
    $this->load->view('templates/topbar.php', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer.php');
  }
}
