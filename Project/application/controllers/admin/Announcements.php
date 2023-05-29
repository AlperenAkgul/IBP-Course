<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Announcements extends CI_Controller
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
        $this->db->from("announcements");
        $this->db->order_by("date", "DESC");
        $query = $this->db->get(); //databaseden users tablosunu çek 
        $data["duyuru"] = $query->result(); //dataları bir array e at

        $this->load->view('admin/_header');
        $this->load->view('admin/_sidebar');
        $this->load->view('admin/announcement_list', $data);
        $this->load->view('admin/_footer');
    }

    public function add()
    {
        $this->load->view('admin/announcement_add');
    }

    public function addsave()
    {
        $data = array(
            'user' => $this->session->session_data['name_surname'],
            'matter' => $this->input->post('matter'),
            'announcement' => $this->input->post('announcement'),
        );
        $this->Database_Model->insert_data("announcements", $data);
        $this->session->set_flashdata("result", "You succesfully added a new announcement!");

        redirect(base_url() . "admin/announcements");
    }

    public function edit($id)
    {
        $QUERY = $this->db->query("SELECT * FROM announcements WHERE id=$id"); //sadece belli id nin verisini çektik
        $data["veri"] = $QUERY->result();

        $this->load->view('admin/announcement_edit', $data);
    }

    public function editsave($id)
    {
        $data = array(
            'matter' => $this->input->post('matter'),
            'announcement' => $this->input->post('announcement'),
        );
        $this->Database_Model->update_data("announcements", $data, $id);
        $this->session->set_flashdata("result", "You succesfully edited the announcement!");

        redirect(base_url() . "admin/announcements");
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM announcements WHERE id=$id");
        $this->session->set_flashdata("result", "You succesfully deleted the announcement");

        redirect(base_url() . "admin/announcements");
    }
}
