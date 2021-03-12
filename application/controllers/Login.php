<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index()
    {
        $data['title'] = "Login Coy";
        $this->load->view('login_v');
    }
}