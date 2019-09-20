<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang_detail extends CI_Controller
{

    public function index()
    {
        $this->template->load('view_tamu/template', 'view_tamu/konten/keranjang_detail/v_keranjang_detail');
    }
}
