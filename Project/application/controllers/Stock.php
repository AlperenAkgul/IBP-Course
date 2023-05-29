<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
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
        $this->db->from("stocks");
        $this->db->order_by('type', 'ASC');
        $query = $this->db->get(); //databaseden announceents tablosunu çek 
        $data["veri"] = $query->result(); //dataları bir array e at

        $this->load->view('_header');
        $this->load->view('_sidebar');
        $this->load->view('stock_list', $data);
        $this->load->view('_footer');
    }
}
