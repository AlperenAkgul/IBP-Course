<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stock extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database(); //Sayfada databesye erişmemizi saglar
        $this->load->model('Database_Model'); //model tanımlaması

        if (!$this->session->userdata('session_data')) {
            redirect(base_url() . 'login');
        } else if ($this->session->session_data['role'] != 'admin') {
            $this->session->set_flashdata("login_failed", "You are not authorized to view this page.");
            redirect(base_url() . 'login');
        }
    }

    public function index()
    {
        $this->db->from("stocks");
        $query = $this->db->get(); //databaseden users tablosunu çek 
        $data["veri"] = $query->result(); //dataları bir array e at

        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/stock_list', $data);
        $this->load->view('admin/_footer');
    }

    public function add()
    {
        $this->load->view('admin/stock_add');
    }

    public function addsave()
    {
        $data = array(
            'type' => $this->input->post('type'),
            'name' => $this->input->post('name'),
            'author' => $this->input->post('author'),
            'year' => $this->input->post('year'),
            'quantity' => $this->input->post('quantity'),
        );
        $this->Database_Model->insert_data("stocks", $data);
        $this->session->set_flashdata("result", "You succesfully added a new item!");

        redirect(base_url() . "admin/stock");
    }

    public function edit($id)
    {
        $QUERY = $this->db->query("SELECT * FROM stocks WHERE id=$id"); //sadece belli id nin verisini çektik
        $data["veri"] = $QUERY->result();

        $this->load->view('admin/stock_edit', $data);
    }

    public function editsave($id)
    {
        $data = array(
            'type' => $this->input->post('type'),
            'name' => $this->input->post('name'),
            'author' => $this->input->post('author'),
            'year' => $this->input->post('year'),
            'quantity' => $this->input->post('quantity'),
        );
        $this->Database_Model->update_data("stocks", $data, $id);
        $this->session->set_flashdata("result", "You succesfully edited the item!");

        redirect(base_url() . "admin/stock");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM stocks WHERE id=$id");
        $this->session->set_flashdata("result", "You succesfully deleted the item");

        redirect(base_url() . "admin/stock");
    }
}
