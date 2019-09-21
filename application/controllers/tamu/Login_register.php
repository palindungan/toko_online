<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_register extends CI_Controller
{

    public function index()
    {
        $this->template->load('view_tamu/template', 'view_tamu/konten/login_register/v_login_register');
    }
}
