<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_kami extends CI_Controller
{

    public function index()
    {
        $this->template->load('view_tamu/template', 'view_tamu/konten/Kontak_kami/v_Kontak_kami');
    }
}
