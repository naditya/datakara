<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotamaad extends CI_Controller {

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

        $this->load->view('v_kotamaad', $data);
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

        $this->load->view('v_tambahkotamaad', $data);
    }
	
	function render_page_topadmin_edit($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_editkotamaad', $data);
    }

	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$table='kotamaad';
			$data['kotamaad'] = $this->model_crud->view_data($table)->result();
			$this->render_page_topadmin('v_kotamaad', $data);
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
			$this->render_page_topadmin_add('v_tambahkotamaad');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		
	}
	
	public function addkotamaad(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$this->load->model('model_crud');
			$data=array(
				'id_kotamaad'=>'',
				'nama_kotamaad'=>$this->input->post('val-username')
			);
			
			$table='kotamaad';
			$this->model_crud->add_data($data, $table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['kotamaad'] = $this->model_crud->view_data($table)->result();
			//$this->render_page_topadmin('v_kotamaad', $data);
			redirect('kotamaad');
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
			$where = array('id_kotamaad' => $uptome);
			$table = 'kotamaad';
			$data['kotamaad'] = $this->model_crud->getbyid($where,$table)->result();
			$this->render_page_topadmin_edit('v_editkotamaad', $data);
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
			$id = $this->input->post('id');
			$namakotamaad = $this->input->post('val-username');
			
		 
			$data = array(
				'nama_kotamaad' => $namakotamaad
			);
		 
			$where = array(
				'id_kotamaad' => $id
			);
			
			$table='kotamaad';
		 
			$this->model_crud->update_data($where,$data,$table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['kotamaad'] = $this->model_crud->view_data($table)->result();
			redirect('kotamaad');
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
			$where = array('id_kotamaad' => $id);
			$table='kotamaad';
			$this->model_crud->delete_data($where,$table);
			$this->session->set_flashdata('del','Data berhasil dihapus');
			redirect('kotamaad');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		

	}



}
