<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");

		if (!$this->session->session_data['role'] == 'user') {
			redirect('home/');
		}
		if ($this->session->session_data['role'] == 'admin') { //eger giriş yapılan kullanıcı admin ise admin sayfasına
			redirect('admin/home/');
		} else { //değilse kullanıcı sayfasına yönlendirlir
			redirect(base_url() . 'login');
		}
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
