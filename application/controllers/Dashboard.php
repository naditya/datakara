<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	//construct dan load helper, lib, model
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('login_model');
		$this->load->model('model_crud');
		//$this->load->library('encrypt');
	}

	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			
			$personil = $this->db->get('personil')->num_rows();
			$perkara = $this->db->get('proses_perkara')->num_rows();
			//$data['pns'] = $this->model_crud->count_pns()->result();
			//$data['lalin'] = $this->model_crud->count_lalin()->result();
			$this->render_page_topadmin('dashboard', compact('personil', 'perkara'));
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$akses = $this->session->userdata('akses');
			$personil = $this->model_crud->count_personil($akses)->num_rows();
			$perkara = $this->model_crud->count_perkara($akses)->num_rows();
			//echo $personil;
			$this->render_page_admin('a_dashboard', compact('personil', 'perkara'));
		}
	}

}
