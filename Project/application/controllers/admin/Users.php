<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
        $query = $this->db->query("SELECT * FROM users WHERE role <> 'admin' "); //databaseden users tablosunu çek 
        $data["veri"] = $query->result(); //dataları bir array e at

        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/user_list', $data);
        $this->load->view('admin/_footer');
    }

    public function add()
    {
        $this->load->view('admin/user_add');
    }

    public function addsave()
    {
        $salt = 'dkospaj546pgqa6';
        $hash = $this->input->post('pass') . $salt;
        $pass = sha1($hash);
        $data = array(
            'name_surname' => $this->input->post('name_surname'),
            'pass' => $pass,
            'email' => $this->input->post('email'),
            'role' => 'user',
        );
        $this->Database_Model->insert_data("users", $data);
        $this->session->set_flashdata("result", "You succesfully added a new user");

        redirect(base_url() . "admin/users");
    }

    public function edit($id)
    {
        $QUERY = $this->db->query("SELECT * FROM users WHERE id=$id"); //sadece belli id nin verisini çektik
        $data["veri"] = $QUERY->result();

        $this->load->view('admin/user_edit', $data);
    }

    public function editsave($id)
    {
        $salt = 'dkospaj546pgqa6';
        $hash = $this->input->post('pass') . $salt;
        $pass = sha1($hash);
        $data = array(
            'name_surname' => $this->input->post('name_surname'),
            'pass' => $pass,
            'email' => $this->input->post('email'),
            'role' => 'user',
        );
        $this->Database_Model->update_data("users", $data, $id);
        $this->session->set_flashdata("result", "You succesfully edited the user");

        redirect(base_url() . "admin/users");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM users WHERE id=$id");
        $this->session->set_flashdata("result", "You succesfully deleted the user");

        redirect(base_url() . "admin/users");
    }
}
