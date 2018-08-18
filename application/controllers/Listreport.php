<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listreport extends CI_Controller {

	//construct dan load helper, lib, model
	public function __construct() {
	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->model('login_model');
	$this->load->model('model_crud');
	$this->load->library('encryption');
}

	function render_page($content, $data = NULL){

		$data['header'] = $this->load->view('templating/header', $data, TRUE);
		$data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
		$data['footer'] = $this->load->view('templating/footer', $data, TRUE);
		$this->load->view('v_list_report', $data);

	}

	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('login');
		}
		else {
			$this->render_page('v_list_report');
		}
	}



}
