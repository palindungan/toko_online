<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_list extends CI_Controller
{

    public function index()
    {
        $this->template->load('view_tamu/template', 'view_tamu/konten/blog_list/v_blog_list');
    }
}
