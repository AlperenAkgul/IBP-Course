<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Messages extends CI_Controller
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
        $this->db->from("messages");
        $this->db->where(array('user1' => $this->session->session_data['name_surname']));
        $this->db->order_by('date', 'DESC');
        $query = $this->db->get(); //databaseden announceents tablosunu çek 
        $data["veri"] = $query->result(); //dataları bir array e at

        $this->load->view('_header');
        $this->load->view('_sidebar');
        $this->load->view('messages_list', $data);
        $this->load->view('_footer');
    }

    public function send()
    {
        $this->load->view('messages_send');
    }

    public function sendsave()
    {
        date_default_timezone_set('Europe/Istanbul');
        $data = array(
            'user1' => $this->session->session_data['name_surname'],
            'user2' => 'Administrator',
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message'),
            'date' => date('Y-m-d H:i:s')
        );
        $this->Database_Model->insert_data("messages", $data);
        $this->session->set_flashdata("result", "You succesfully added a new announcement!");

        redirect(base_url() . "messages");
    }

    public function read($id)
    {
        $QUERY = $this->db->query("SELECT * FROM messages WHERE id=$id"); //sadece belli id nin verisini çektik
        $data["veri"] = $QUERY->result();

        $this->load->view('messages_read', $data);
    }
}
