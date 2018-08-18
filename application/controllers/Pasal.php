<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasal extends CI_Controller {

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

        $this->load->view('v_pasal', $data);
    }
	
	function render_page_admin($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['a_leftbar'] = $this->load->view('templating/a_leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('a_dashboard', $data);
    }
	
	function render_page_topadmin_add($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_tambahpasal', $data);
    }
	
	function render_page_topadmin_edit($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_editpasal', $data);
    }

	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			
			$data['pasal'] = $this->model_crud->get_join_pasal()->result();
			$this->render_page_topadmin('v_pasal', $data);
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
			$table1='kategoripasal';
			$data['kategoripasal'] = $this->model_crud->get_data($table1)->result();
			$this->render_page_topadmin_add('v_tambahpasal', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		
	}
	
	public function addpasal(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$this->load->model('model_crud');
			$data=array(
				'id_pasal'=>'',
				'id_kategori'=>$this->input->post('val-jenis'),
				'nama_pasal'=>$this->input->post('val-username'),
				'nama_ayat'=>$this->input->post('val-tlp'),
				'nama_klasifikasi'=>$this->input->post('val-alamat')
			);
			
			$table='pasal';
			
			$this->model_crud->add_data($data, $table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['pasal'] = $this->model_crud->view_data($table)->result();
			//$this->render_page_topadmin('v_pasal', $data);
			redirect('pasal');
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
			$where = array('id_pasal' => $uptome);
			//$table = 'pasal';
			//$data['pasal'] = $this->model_crud->getbyid($where,$table)->result();
			$data['pasal'] = $this->model_crud->get_join_pasal_byid($uptome)->result();
			$table1='kategoripasal';
			$data['kategoripasal'] = $this->model_crud->get_data($table1)->result();
			$this->render_page_topadmin_edit('v_editpasal', $data);
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
			$kategori = $this->input->post('val-jenis');
			$namapasal = $this->input->post('val-username');
			$ayatpasal = $this->input->post('val-tlp');
			$klasifikasipasal = $this->input->post('val-alamat');
			
		 
			$data = array(
				'id_kategori' => $kategori,
				'nama_pasal' => $namapasal,
				'nama_ayat' => $ayatpasal,
				'nama_klasifikasi' => $klasifikasipasal
			);
		 
			$where = array(
				'id_pasal' => $id
			);
			
			$table='pasal';
		 
			$this->model_crud->update_data($where,$data,$table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['pasal'] = $this->model_crud->view_data($table)->result();
			redirect('pasal');
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
			$where = array('id_pasal' => $id);
			$table='pasal';
			$this->model_crud->delete_data($where,$table);
			$this->session->set_flashdata('del','Data berhasil dihapus');
			redirect('pasal');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
		

	}



}
