<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("session");

        if (!$this->session->userdata('session_data')) {
            redirect(base_url() . 'login');
        } else if ($this->session->session_data['role'] != 'admin') {
            $this->session->set_flashdata("login_failed", "You are not authorized to view this page.");
            redirect(base_url() . 'login');
        }
    }

    public function index()
    {
        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/_main_content');
        $this->load->view('admin/_footer');
    }

    public function login()
    {
        $this->load->view('login_form');
    }
}
