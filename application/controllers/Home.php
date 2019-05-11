<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => "Home", 
        
        );

        $this->load->view('layouts/guest_header', $data);
        $this->load->view('layouts/guest_navbar');
        $this->load->view('pages/new_home');
        $this->load->view('layouts/guest_footer');
    }

    public function login()
    {
        $data = array(
            'title' => "Login", 
        
        );

        $this->load->view('layouts/guest_header', $data);
        $this->load->view('layouts/guest_navbar');
        $this->load->view('pages/new_login');
        $this->load->view('layouts/guest_footer');
    }
}
