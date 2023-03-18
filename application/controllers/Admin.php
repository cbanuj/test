<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->library('email');
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}

	public function table()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/table');
		$this->load->view('admin/footer');
	}

	public function form()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/generalform');
		$this->load->view('admin/footer');
	}

}
?>
