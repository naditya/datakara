<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

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

        $this->load->view('v_password', $data);
    }
	
	function render_page_admin($content, $data = NULL){

        $data['a_header'] = $this->load->view('templating/a_header', $data, TRUE);
        $data['a_leftbar'] = $this->load->view('templating/a_leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_password', $data);
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
			$this->render_page_topadmin('v_password', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$table='users';
			$w=$this->session->userdata('nama');
			$where = array('username' => $w);
			$data['users'] = $this->model_crud->getbyid($where,$table)->result();
			$this->render_page_admin('v_password', $data);
		}
	}
	
	function updatepassword(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			
			$pwd = $this->input->post('val-newpassword');
			$oldpwd = $this->input->post('val-password');
			$conpwd = $this->input->post('val-confirm-password');
			
			$shapwd = sha1($pwd);
		 
			$data = array(
				'password' => $shapwd
			);
		 
			$where = array(
				'username' => $this->session->userdata('nama')
			);
			
			$table='users';
			
			$get=$this->model_crud->getbyid($where, $table)->result();
			//echo $get;
			foreach ($get as $row)
				{
						$old=$row->password;
						
				}
			//echo $old;
			$sha1pwd = sha1($oldpwd);
			//echo $sha1pwd;
			
			//echo "$old <br> $sha1pwd"; 
			if ($sha1pwd != $old) {
				$this->session->set_flashdata('errup','Password lama salah, koreksi kembali!');
				redirect('Password');
			}
			
			if ($pwd == $oldpwd) {
				$this->session->set_flashdata('errup','Password baru tidak diperkenankan sama dengan password lama!');
				redirect('Password');
			}
			else {
				$this->model_crud->update_data($where,$data,$table);
				$this->session->sess_destroy();
				$this->session->set_flashdata('sucup','Password berhasil diupdate dan sesi dihapus. silahkan login kembali!');
				$this->load->view('v_login');
			}
			
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$pwd = $this->input->post('val-newpassword');
			$oldpwd = $this->input->post('val-password');
			$conpwd = $this->input->post('val-confirm-password');
			
			$shapwd = sha1($pwd);
		 
			$data = array(
				'password' => $shapwd
			);
		 
			$where = array(
				'username' => $this->session->userdata('nama')
			);
			
			$table='users';
			
			$get=$this->model_crud->getbyid($where, $table)->result();
			//echo $get;
			foreach ($get as $row)
				{
						$old=$row->password;
						
				}
			//echo $old;
			$sha1pwd = sha1($oldpwd);
			//echo $sha1pwd;
			
			//echo "$old <br> $sha1pwd"; 
			if ($sha1pwd != $old) {
				$this->session->set_flashdata('errup','Password lama salah, koreksi kembali!');
				redirect('Password');
			}
			
			if ($pwd == $oldpwd) {
				$this->session->set_flashdata('errup','Password baru tidak diperkenankan sama dengan password lama!');
				redirect('Password');
			}
			else {
				$this->model_crud->update_data($where,$data,$table);
				$this->session->sess_destroy();
				$this->session->set_flashdata('sucup','Password berhasil diupdate dan sesi dihapus. silahkan login kembali!');
				$this->load->view('v_login');
			}
		}
		
		
	}

	
}
