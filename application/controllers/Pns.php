<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pns extends CI_Controller {

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

        $this->load->view('v_pns', $data);
    }
	
	function render_page_admin($content, $data = NULL){

        $data['a_header'] = $this->load->view('templating/a_header', $data, TRUE);
        $data['a_leftbar'] = $this->load->view('templating/a_leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_pns', $data);
    }
	
	function render_page_topadmin_add($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_tambahpns', $data);
    }
	
	function render_page_admin_add($content, $data = NULL){

        $data['a_header'] = $this->load->view('templating/a_header', $data, TRUE);
        $data['a_leftbar'] = $this->load->view('templating/a_leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_tambahpns', $data);
    }
	
	function render_page_topadmin_edit($content, $data = NULL){

        $data['header'] = $this->load->view('templating/header', $data, TRUE);
        $data['leftbar'] = $this->load->view('templating/leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_editpns', $data);
    }
	
	function render_page_admin_edit($content, $data = NULL){

        $data['a_header'] = $this->load->view('templating/a_header', $data, TRUE);
        $data['a_leftbar'] = $this->load->view('templating/a_leftbar', $data, TRUE);
        $data['footer'] = $this->load->view('templating/footer', $data, TRUE);

        $this->load->view('v_editpns', $data);
    }

	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			
			$data['pns'] = $this->model_crud->get_join_pns()->result();
			$this->render_page_topadmin('v_pns', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$akses = $this->session->userdata('akses');
			
			$data['pns'] = $this->model_crud->get_join_pns_byakses($akses)->result();
			$this->render_page_admin('v_pns', $data);
		}
	}
	
	public function form() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$table1='agama';
			$data['agama'] = $this->model_crud->get_data($table1)->result();
			
			$table2='suku';
			$data['suku'] = $this->model_crud->get_data($table2)->result();
			
			$table3='goldar';
			$data['goldar'] = $this->model_crud->get_data($table3)->result();
			
			$table4='statkawin';
			$data['statkawin'] = $this->model_crud->get_data($table4)->result();
			
			//$data['pangkat'] = $this->model_crud->get_join_pangkat()->result();
			$table5='pangpns';
			$data['golpang'] = $this->model_crud->get_data($table5)->result();
			
			$table1='akses';
			$data['akses'] = $this->model_crud->get_data($table1)->result();
			$this->render_page_topadmin_add('v_tambahpns', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$table1='agama';
			$data['agama'] = $this->model_crud->get_data($table1)->result();
			
			$table2='suku';
			$data['suku'] = $this->model_crud->get_data($table2)->result();
			
			$table3='goldar';
			$data['goldar'] = $this->model_crud->get_data($table3)->result();
			
			$table4='statkawin';
			$data['statkawin'] = $this->model_crud->get_data($table4)->result();
			
			$table5='pangpns';
			$data['golpang'] = $this->model_crud->get_data($table5)->result();
			
			$data['pangkat'] = $this->model_crud->get_join_pangkat()->result();
			
			$this->render_page_admin_add('v_tambahpns', $data);
		}
		
	}
	
	public function addpns(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$this->load->model('model_crud');
			$data=array(
				'nip'=>$this->input->post('val-nrp'),
				'nama'=>$this->input->post('val-nama'),
				'tempat_lahir'=>$this->input->post('val-place'),
				'tgl_lahir'=>$this->input->post('val-tgl'),
				'jenis_kelamin'=>$this->input->post('val-jenis'),
				'agama'=>$this->input->post('val-agama'),
				'suku'=>$this->input->post('val-suku'),
				'goldar'=>$this->input->post('val-goldar'),
				'status'=>$this->input->post('val-status'),
				'alamat'=>$this->input->post('val-alamat'),
				'gol'=>$this->input->post('val-pangkat'),
				'kesatuan'=>$this->input->post('val-kesatuan'),
				'jabatan'=>$this->input->post('val-jabatan'),
				'akses'=>$this->input->post('val-role')
				
			);
			
			$table='pns';
			$this->model_crud->add_data($data, $table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['odituratotmilti'] = $this->model_crud->view_data($table)->result();
			//$this->render_page_topadmin('v_odituratotmilti', $data);
			redirect('pns');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->load->model('model_crud');
			$data=array(
				'nip'=>$this->input->post('val-nrp'),
				'nama'=>$this->input->post('val-nama'),
				'tempat_lahir'=>$this->input->post('val-place'),
				'tgl_lahir'=>$this->input->post('val-tgl'),
				'jenis_kelamin'=>$this->input->post('val-jenis'),
				'agama'=>$this->input->post('val-agama'),
				'suku'=>$this->input->post('val-suku'),
				'goldar'=>$this->input->post('val-goldar'),
				'status'=>$this->input->post('val-status'),
				'alamat'=>$this->input->post('val-alamat'),
				'gol'=>$this->input->post('val-pangkat'),
				'kesatuan'=>$this->input->post('val-kesatuan'),
				'jabatan'=>$this->input->post('val-jabatan'),
				'akses'=>$this->session->userdata('akses')
				
			);
			
			$table='pns';
			$this->model_crud->add_data($data, $table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['odituratotmilti'] = $this->model_crud->view_data($table)->result();
			//$this->render_page_topadmin('v_odituratotmilti', $data);
			redirect('pns');
		}
	}
	
	public function dataform($uptome) {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$where = array('nip' => $uptome);
			$table1='agama';
			$data['agama'] = $this->model_crud->get_data($table1)->result();
			
			$table2='suku';
			$data['suku'] = $this->model_crud->get_data($table2)->result();
			
			$table3='goldar';
			$data['goldar'] = $this->model_crud->get_data($table3)->result();
			
			$table4='statkawin';
			$data['statkawin'] = $this->model_crud->get_data($table4)->result();
			
			$data['pangkat'] = $this->model_crud->get_join_pangkat()->result();
			
			$table = 'pns';
			$data['pns'] = $this->model_crud->getbyid($where,$table)->result();
			
			$person1 = $this->model_crud->getbyid($where,$table)->result();
			foreach ($person1 as $pers) {
				$accs = $pers->akses ;
			
			}
			//echo $accs;
			$where1 = array('nama_akses' => $accs);
			
			$data['resultagama'] = $this->model_crud->get_join_agamapns_byid($uptome)->result();
			$data['resultsuku'] = $this->model_crud->get_join_sukupns_byid($uptome)->result();
			$data['resultgoldar'] = $this->model_crud->get_join_goldarpns_byid($uptome)->result();
			$data['resultstat'] = $this->model_crud->get_join_statpns_byid($uptome)->result();
			$data['resultgolpang'] = $this->model_crud->get_join_gol_byid($uptome)->result();
			
			$table1='akses';
			$data['akses'] = $this->model_crud->get_data($table1)->result();
			$data['akses1'] = $this->model_crud->getbyid($where1,$table1)->result();
			
			$this->render_page_topadmin_edit('v_editpns', $data);
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$where = array('nip' => $uptome);
			$table1='agama';
			$data['agama'] = $this->model_crud->get_data($table1)->result();
			
			$table2='suku';
			$data['suku'] = $this->model_crud->get_data($table2)->result();
			
			$table3='goldar';
			$data['goldar'] = $this->model_crud->get_data($table3)->result();
			
			$table4='statkawin';
			$data['statkawin'] = $this->model_crud->get_data($table4)->result();
			
			$table5='pangpns';
			$data['golpang'] = $this->model_crud->get_data($table5)->result();
			
			$table = 'pns';
			$data['pns'] = $this->model_crud->getbyid($where,$table)->result();
			
			$data['resultagama'] = $this->model_crud->get_join_agamapns_byid($uptome)->result();
			$data['resultsuku'] = $this->model_crud->get_join_sukupns_byid($uptome)->result();
			$data['resultgoldar'] = $this->model_crud->get_join_goldarpns_byid($uptome)->result();
			$data['resultstat'] = $this->model_crud->get_join_statpns_byid($uptome)->result();
			$data['resultgolpang'] = $this->model_crud->get_join_gol_byid($uptome)->result();
			
			$this->render_page_admin_edit('v_editpns', $data);
		}
		
	}
	
	function editdata(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$id = $this->input->post('val-nrp');
			
			$data=array(
				'nip'=>$this->input->post('val-nrp'),
				'nama'=>$this->input->post('val-nama'),
				'tempat_lahir'=>$this->input->post('val-place'),
				'tgl_lahir'=>$this->input->post('val-tgl'),
				'jenis_kelamin'=>$this->input->post('val-jenis'),
				'agama'=>$this->input->post('val-agama'),
				'suku'=>$this->input->post('val-suku'),
				'goldar'=>$this->input->post('val-goldar'),
				'status'=>$this->input->post('val-status'),
				'alamat'=>$this->input->post('val-alamat'),
				'gol'=>$this->input->post('val-pangkat'),
				'kesatuan'=>$this->input->post('val-kesatuan'),
				'jabatan'=>$this->input->post('val-jabatan'),
				'akses'=>$this->input->post('val-role')
			);
		 
			$where = array(
				'nip' => $id
			);
			
			$table='pns';
		 
			$this->model_crud->update_data($where,$data,$table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['odituratotmilti'] = $this->model_crud->view_data($table)->result();
			redirect('pns');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$id = $this->input->post('val-nrp');
			
			$data=array(
				'nip'=>$this->input->post('val-nrp'),
				'nama'=>$this->input->post('val-nama'),
				'tempat_lahir'=>$this->input->post('val-place'),
				'tgl_lahir'=>$this->input->post('val-tgl'),
				'jenis_kelamin'=>$this->input->post('val-jenis'),
				'agama'=>$this->input->post('val-agama'),
				'suku'=>$this->input->post('val-suku'),
				'goldar'=>$this->input->post('val-goldar'),
				'status'=>$this->input->post('val-status'),
				'alamat'=>$this->input->post('val-alamat'),
				'gol'=>$this->input->post('val-pangkat'),
				'kesatuan'=>$this->input->post('val-kesatuan'),
				'jabatan'=>$this->input->post('val-jabatan'),
				'akses'=>$this->session->userdata('akses')
			);
		 
			$where = array(
				'nip' => $id
			);
			
			$table='pns';
		 
			$this->model_crud->update_data($where,$data,$table);
			$this->session->set_flashdata('suc','Data berhasil disimpan');
			//$data['odituratotmilti'] = $this->model_crud->view_data($table)->result();
			redirect('pns');
		}
		
		
	}

	public function deldata($id) {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$where = array('nip' => $id);
			$table='pns';
			$this->model_crud->delete_data($where,$table);
			$this->session->set_flashdata('del','Data berhasil dihapus');
			redirect('pns');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$where = array('nip' => $id);
			$table='pns';
			$this->model_crud->delete_data($where,$table);
			$this->session->set_flashdata('del','Data berhasil dihapus');
			redirect('pns');
		}
		

	}



}
