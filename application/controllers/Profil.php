<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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

	function render_page_topadmin($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_profil', $data);
    }
	
	function render_page_admin($content, $data = NULL){

        $data['a_header'] = $this->load->view('templating/a_header', $data, TRUE);
        $data['a_leftbar'] = $this->load->view('templating/a_leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_profil', $data);
    }

	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$table='users';
			$w=$this->session->userdata('nama');
			$where = array('username' => $w);
			$data['users'] = $this->model_crud->getbyid($where,$table)->result();
			$this->render_page_topadmin('v_profil', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$table='users';
			$w=$this->session->userdata('nama');
			$where = array('username' => $w);
			$data['users'] = $this->model_crud->getbyid($where,$table)->result();
			$this->render_page_admin('v_profil', $data);
		}
	}
	
	function editdata(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			
			$uname = $this->input->post('val-username');
			$nrp = $this->input->post('val-nrp');
			$nama = $this->input->post('val-nama');
			$tlp = $this->input->post('val-tlp');
			$jabatan = $this->input->post('val-jabatan');
			$email = $this->input->post('val-email');
			
		 
			$data = array(
				'nrp' => $nrp,
				'nama' => $nama,
				'jabatan' => $jabatan,
				'kontak' => $tlp,
				'email' => $email
			);
		 
			$where = array(
				'username' => $this->session->userdata('nama')
			);
			
			$table='users';
			$this->model_crud->update_data($where,$data,$table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			redirect('Profil');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$uname = $this->input->post('val-username');
			$nrp = $this->input->post('val-nrp');
			$nama = $this->input->post('val-nama');
			$tlp = $this->input->post('val-tlp');
			$jabatan = $this->input->post('val-jabatan');
			$email = $this->input->post('val-email');
			
		 
			$data = array(
				'nrp' => $nrp,
				'nama' => $nama,
				'jabatan' => $jabatan,
				'kontak' => $tlp,
				'email' => $email
			);
		 
			$where = array(
				'username' => $this->session->userdata('nama')
			);
			
			$table='users';
			$this->model_crud->update_data($where,$data,$table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			redirect('Profil');
		}
		
		
	}

	
}
