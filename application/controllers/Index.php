<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function index()
    {
        $data['page'] = 'home/index';
        $data['title'] = 'Home';
        $this->load->view('home/templates/index', $data);
    }
}
