<?php

class Technology extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {
		$this->load->view('templates/header');
		// $this->load->view('templates/header-main', $data);
		$this->load->view('pages/technology');
		$this->load->view('templates/footer');
	}
}
?>