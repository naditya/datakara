<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermanagement extends CI_Controller {

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

        $this->load->view('v_user', $data);
    }
	
	function render_page_admin($content, $data = NULL){

        $data['a_header'] = $this->load->view('templating/a_header', $data, TRUE);
        $data['a_leftbar'] = $this->load->view('templating/a_leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('a_dashboard', $data);
    }
	
	function render_page_topadmin_add($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_tambahuser', $data);
    }
	
	function render_page_topadmin_edit($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_edituser', $data);
    }

	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$table='users';
			$data['users'] = $this->model_crud->view_data($table)->result();
			$this->render_page_topadmin('v_users', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
	}
	
	public function form() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$table1='akses';
			$data['akses'] = $this->model_crud->get_data($table1)->result();
			$this->render_page_topadmin_add('v_tambahuser', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		
	}
	
	public function adduser(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$this->load->model('model_crud');
			$passwd = sha1($this->input->post('val-password'));
			$data=array(
				'username'=>$this->input->post('val-username'),
				'nama'=>$this->input->post('val-nama'),
				'role'=>$this->input->post('val-role'),
				'status'=>$this->input->post('val-status'),
				'akses'=>$this->input->post('val-jenis'),
				'password'=>$passwd
			);
			
			$table='users';
			$this->model_crud->add_data($data, $table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['agama'] = $this->model_crud->view_data($table)->result();
			//$this->render_page_topadmin('v_agama', $data);
			redirect('usermanagement');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
	}
	
	public function dataform($uptome) {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			//$id = $this->encrypt->decode($uptome);
			//echo "<br> $id";
			$where = array('username' => $uptome);
			$table = 'users';
			$table1='akses';
			$data['akses'] = $this->model_crud->get_data($table1)->result();
			$data['user'] = $this->model_crud->getjoin_userakses_byid($uptome)->result();
			$this->render_page_topadmin_edit('v_edituser', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		
	}
	
	function editdata(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$id = $this->input->post('val-id');
			//$uname = $this->input->post('val-username');
			$passwd = sha1($this->input->post('val-password'));
			$data=array(
				'nama'=>$this->input->post('val-nama'),
				'role'=>$this->input->post('val-role'),
				'status'=>$this->input->post('val-status'),
				'akses'=>$this->input->post('val-jenis'),
				'password'=>$passwd
			);
		 
			$where = array(
				'username' => $id
			);
			
			$table='users';
		 
			$this->model_crud->update_data($where,$data,$table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['agama'] = $this->model_crud->view_data($table)->result();
			redirect('usermanagement');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		
		
	}

	public function deldata($id) {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$where = array('username' => $id);
			$table='users';
			$this->model_crud->delete_data($where,$table);
			$this->session->set_flashdata('del','Data berhasil dihapus');
			redirect('usermanagement');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		

	}
	
	public function changerole($id,$role) {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$where = array('username' => $id);
			
			if ($role == "topadmin") {
				$data=array(
					'role'=>"admin"
				);
				
				$table='users';
				$this->model_crud->update_data($where,$data,$table);
				$this->session->set_flashdata('suc','Role berhasil diubah');
				redirect('usermanagement');
			}
			else {
				$data=array(
					'role'=>"topadmin"
				);
				
				$table='users';
				$this->model_crud->update_data($where,$data,$table);
				$this->session->set_flashdata('suc','Role berhasil diubah');
				redirect('usermanagement');
			}
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		

	}
	
	public function changestat($id,$stat) {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$where = array('username' => $id);
			
			if ($stat == 1) {
				$data=array(
					'status'=>0
				);
				
				$table='users';
				$this->model_crud->update_data($where,$data,$table);
				$this->session->set_flashdata('suc','Status berhasil diubah');
				redirect('usermanagement');
			}
			else {
				$data=array(
					'status'=>1
				);
				
				$table='users';
				$this->model_crud->update_data($where,$data,$table);
				$this->session->set_flashdata('suc','Status berhasil diubah');
				redirect('usermanagement');
			}
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		

	}



}
