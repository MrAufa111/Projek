<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PPDB extends CI_Controller
{

    public function index()
    {
        $data['page'] = 'ppdb/index';
        $data['title'] = 'Home';
        $this->load->view('ppdb/templates/index', $data);
    }
}
