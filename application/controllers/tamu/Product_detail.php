<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_detail extends CI_Controller
{

    public function index()
    {
        $this->template->load('view_tamu/template', 'view_tamu/konten/product_detail/v_product_detail');
    }
}
