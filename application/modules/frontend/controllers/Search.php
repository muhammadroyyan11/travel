<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {

        $data = [
            'title' => 'Find destination',
            'tujuan'    => $this->base->get('tujuan')->result_array()
        ];
        $this->frontend->load('frontend/template', 'frontend/searching/search', $data);
    }
}