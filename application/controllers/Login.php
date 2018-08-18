<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	//construct dan load helper, lib, model
	public function __construct() {
	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->model('login_model');
}

	public function index() {
		if($this->session->userdata('status') != "login"){
			$this->load->view('v_login');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "topadmin" ) {
			$this->render_page_topadmin('dashboard');
		}
		if ($this->session->userdata('status') == "login" && $this->session->userdata('role') == "admin" ) {
			$this->render_page_admin('a_dashboard');
		}
	}

	function whatsnext(){
		
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => sha1($password)
            );
			
		

		$cek = $this->login_model->cek_login("users",$where)->num_rows();
		//echo "row = $cek ";
		
		$cekstatus = $this->login_model->cek_status($username);
		//echo "status = $cekstatus ";
		
		$cekrole = $this->login_model->cek_role($username);
		//echo "role = $cekrole ";
		
		$cekakses = $this->login_model->cek_akses($username);
		//echo "akses = $cekakses ";
		
		//Untuk Test Cek Nilai
		foreach ($cekstatus as $row) {
			$stat = $row->status;
		
		}
	   //echo $s;

		foreach ($cekrole as $row1) {
			$r = $row1->role;
		
		}
	   //echo $r;
	   
	   foreach ($cekakses as $row2) {
			$ak = $row2->akses;
		
		}
	   //echo $ak;
	   
		if($cek > 0 AND $stat > 0){

            $data_session = array(
                'nama' => $username,
                'status' => "login",
                'akses' => $ak,
				'role' => $r
                );
			//echo "sukses login";
            
			if ($r == 'topadmin') {
				$this->session->set_userdata($data_session);
				//$this->render_page_topadmin('dashboard');
				//echo "topadmin";
				//echo $r;
				redirect('dashboard');
			}
			else {
				$this->session->set_userdata($data_session);
				//echo "admin";
				//echo $r;
				redirect('dashboard');
			}

        }
		
		if($cek == 0){
			//echo "Username dan password salah, periksa kembali!";
            $this->session->set_flashdata('err','Nama user dan sandi tidak sesuai, periksa kembali!');
			$this->load->view('v_login');

        }
		
		if($cek > 0 && $stat == 0){
			//echo "Username anda dicekal, hubungi administrator!";
            $this->session->set_flashdata('cekal','User anda dicekal, hubungi administrator!');
			$this->load->view('v_logincekal');

        }
	  

    }
	

	function goodbye(){
        $this->session->sess_destroy();
        $this->load->view('v_login');
    }

}
