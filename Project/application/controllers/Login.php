<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library("session");
        $this->load->model("Admin_Model");
        $this->load->model('Database_Model'); //model tanımlaması
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('login_form');
    }

    public function login_check()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pass', 'pass', 'trim|required|xss_clean');

        $email = $this->input->post('email', TRUE);
        $pass = $this->input->post('password', TRUE);

        $result = $this->Admin_Model->login($email, $pass);
        if ($result) {
            //Kullanıcı var ise bilgileri array a aktarılıyor
            $session_array = array(
                'id' => $result[0]->id,
                'name_surname' => $result[0]->name_surname,
                'email' => $result[0]->email,
                'role' => $result[0]->role,
            );
            //Array verileri Codeigniter session kütüphanesi değişkenlerine aktarlıyor
            $this->session->set_userdata('session_data', $session_array);

            if ($this->session->session_data['role'] == 'admin') { //eger giriş yapılan kullanıcı admin ise admin sayfasına
                redirect('admin/home/');
            } else { //değilse kullanıcı sayfasına yönlendirlir
                redirect('home/');
            }
        } else {
            $this->session->set_flashdata("login_failed", "Invalid E-Mail or Password");
            $this->load->view('login_form');
        }
    }

    public function password($id)
    {
        $this->load->view('change_password', $id);
    }

    public function changepassword($id)
    {
        $salt = 'dkospaj546pgqa6';
        $hash = $this->input->post('new_pass') . $salt;
        $pass = sha1($hash);
        $data = array(
            'pass' => $pass,
        );

        $this->Database_Model->update_data("users", $data, $id);
        $this->session->set_flashdata("login_information", "You Have Changed Your Password. Please Sign In.");
        $this->load->view('login_form');
    }

    public function logout()
    {
        $this->session->unset_userdata('session_data');
        $this->session->sess_destroy();
        redirect(base_url() . 'login');
    }
}
