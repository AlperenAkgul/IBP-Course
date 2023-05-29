<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("session");
        $this->load->database(); //Sayfada databesye erişmemizi saglar
        $this->load->model('Database_Model'); //model tanımlaması

        if (!$this->session->userdata('session_data')) {
            redirect(base_url() . 'login');
        } else if ($this->session->session_data['role'] != 'user') {
            $this->session->set_flashdata("login_failed", "You are not authorized to view this page.");
            redirect(base_url() . 'login');
        }
    }

    public function index()
    {
        $this->db->from("announcements");
        $this->db->order_by('date', 'DESC');
        $query = $this->db->get(); //databaseden announceents tablosunu çek 
        $data["duyuru"] = $query->result(); //dataları bir array e at

        $this->load->view('_header');
        $this->load->view('_sidebar');
        $this->load->view('_main_content', $data);
        $this->load->view('_footer');
    }

    public function login()
    {
        $this->load->view('login_form');
    }
}
