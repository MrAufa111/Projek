<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function index()
    {
        $data['page'] = 'admin/index';
        $data['title'] = 'Dashboard';
        $this->load->view('admin/templates/index', $data);
    }
}
