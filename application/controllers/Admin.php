<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['tittle'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->Userdata('email')])->row_array();



        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/topbar.php', $data);
        $this->load->view('admin/index.php', $data);
        $this->load->view('templates/footer.php');
    }
}
