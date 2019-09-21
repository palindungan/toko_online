<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{

    public function index()
    {
        $this->template->load('view_tamu/template', 'view_tamu/konten/keranjang/v_keranjang');
    }
}
