<?php
  class Model_crud extends CI_Model {
    function __construct() {
        parent::__construct();

    }

    function add_data($data, $table){
        $this->db->insert($table, $data);

    }

    function view_data($table){
        return $this->db->get($table);

    }
	
	function get_data($table){
        return $this->db->get($table);

    }
	
	function get_join_table() {
		return $this->db->query('SELECT odituratotmil.id_odituratotmil, odituratotmil.nama_odituratotmil, odituratotmilti.nama_odituratotmilti from odituratotmil INNER JOIN odituratotmilti ON odituratotmil.id_odituratotmilti=odituratotmilti.id_odituratotmilti');
	
	}
	
	function get_join_pangkat() {
		return $this->db->query('SELECT * FROM pangkat INNER JOIN matra ON matra.id_matra=pangkat.id_matra');
	
	}
	
	//JOIN PERSONIL
	function get_join_pangkat_byid($uptome) {
		return $this->db->query("SELECT * FROM pangkat INNER JOIN matra ON pangkat.id_matra=matra.id_matra WHERE pangkat.id_pangkat='$uptome'");
	
	}
	
	function get_join_agamapersonil_byid($uptome) {
		return $this->db->query("SELECT * FROM personil INNER JOIN agama ON personil.agama=agama.id_agama WHERE personil.nrp='$uptome'");
	
	}
	
	function get_join_sukupersonil_byid($uptome) {
		return $this->db->query("SELECT * FROM personil INNER JOIN suku ON personil.suku=suku.id_suku WHERE personil.nrp='$uptome'");
	
	}
	
	function get_join_goldarpersonil_byid($uptome) {
		return $this->db->query("SELECT * FROM personil INNER JOIN goldar ON personil.goldar=goldar.id_goldar WHERE personil.nrp='$uptome'");
	
	}
	
	function get_join_statpersonil_byid($uptome) {
		return $this->db->query("SELECT * FROM personil INNER JOIN statkawin ON personil.status=statkawin.id_statkawin WHERE personil.nrp='$uptome'");
	
	}
	
	function get_join_pangkatpersonil_byid($uptome) {
		return $this->db->query("SELECT * FROM personil INNER JOIN pangkat ON personil.pangkat=pangkat.id_pangkat INNER JOIN matra ON pangkat.id_matra=matra.id_matra WHERE personil.nrp='$uptome'");
	
	}
	
	//JOIN PNS
	function get_join_gol_byid($uptome) {
		return $this->db->query("SELECT * FROM pns INNER JOIN pangpns ON pns.gol=pangpns.id_pangpns WHERE pns.nip='$uptome'");
	
	}
	
	function get_join_agamapns_byid($uptome) {
		return $this->db->query("SELECT * FROM pns INNER JOIN agama ON pns.agama=agama.id_agama WHERE pns.nip='$uptome'");
	
	}
	
	function get_join_sukupns_byid($uptome) {
		return $this->db->query("SELECT * FROM pns INNER JOIN suku ON pns.suku=suku.id_suku WHERE pns.nip='$uptome'");
	
	}
	
	function get_join_goldarpns_byid($uptome) {
		return $this->db->query("SELECT * FROM pns INNER JOIN goldar ON pns.goldar=goldar.id_goldar WHERE pns.nip='$uptome'");
	
	}
	
	function get_join_statpns_byid($uptome) {
		return $this->db->query("SELECT * FROM pns INNER JOIN statkawin ON pns.status=statkawin.id_statkawin WHERE pns.nip='$uptome'");
	
	}
	
	//END JOIN PNS
	
	
	function get_join_table_byid($uptome) {
		return $this->db->query("SELECT odituratotmil.id_odituratotmil, odituratotmil.nama_odituratotmil, odituratotmil.id_odituratotmilti, odituratotmilti.nama_odituratotmilti from odituratotmil INNER JOIN odituratotmilti ON odituratotmil.id_odituratotmilti=odituratotmilti.id_odituratotmilti WHERE odituratotmil.id_odituratotmil='$uptome'");
	
	}
	
	function get_join_pasal() {
		return $this->db->query("SELECT * FROM pasal INNER JOIN kategoripasal ON pasal.id_kategori = kategoripasal.id_kategoripasal");
		
	}
	
	function get_join_pasal_byid($uptome) {
		return $this->db->query("SELECT * FROM pasal INNER JOIN kategoripasal ON pasal.id_kategori = kategoripasal.id_kategoripasal WHERE pasal.id_pasal='$uptome'");
		
	}
	
	function getjoin_userakses_byid($uptome) {
		return $this->db->query("SELECT * FROM users INNER JOIN akses ON users.akses = akses.nama_akses WHERE users.username='$uptome'");
		
	}
	
	function get_join_personil() {
		return $this->db->query("SELECT * FROM personil INNER JOIN pangkat ON personil.pangkat = pangkat.id_pangkat INNER JOIN suku ON personil.suku = suku.id_suku INNER JOIN goldar ON personil.goldar = goldar.id_goldar INNER JOIN agama ON personil.agama = agama.id_agama INNER JOIN statkawin ON personil.status = statkawin.id_statkawin INNER JOIN matra ON pangkat.id_matra = matra.id_matra INNER JOIN akses ON personil.akses = akses.nama_akses");
		
	}
	
	function get_join_pns() {
		return $this->db->query("SELECT * FROM pns INNER JOIN pangpns ON pns.gol = pangpns.id_pangpns INNER JOIN suku ON pns.suku = suku.id_suku INNER JOIN goldar ON pns.goldar = goldar.id_goldar INNER JOIN agama ON pns.agama = agama.id_agama INNER JOIN statkawin ON pns.status = statkawin.id_statkawin INNER JOIN akses ON pns.akses = akses.nama_akses");
		
	}
	
	function get_join_pns_byakses($akses) {
		return $this->db->query("SELECT * FROM pns INNER JOIN pangpns ON pns.gol = pangpns.id_pangpns INNER JOIN suku ON pns.suku = suku.id_suku INNER JOIN goldar ON pns.goldar = goldar.id_goldar INNER JOIN agama ON pns.agama = agama.id_agama INNER JOIN statkawin ON pns.status = statkawin.id_statkawin INNER JOIN akses ON pns.akses = akses.nama_akses WHERE pns.akses='$akses'");
		
	}
	
	function get_join_personil_byakses($akses) {
		return $this->db->query("SELECT * FROM personil INNER JOIN pangkat ON personil.pangkat = pangkat.id_pangkat INNER JOIN suku ON personil.suku = suku.id_suku INNER JOIN goldar ON personil.goldar = goldar.id_goldar INNER JOIN agama ON personil.agama = agama.id_agama INNER JOIN statkawin ON personil.status = statkawin.id_statkawin INNER JOIN matra ON pangkat.id_matra = matra.id_matra INNER JOIN akses ON personil.akses = akses.nama_akses WHERE personil.akses='$akses'");
		
	}
	
 
	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function getbyid($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function count_personil($akses) {
		return $this->db->query("SELECT*FROM personil WHERE akses='$akses'");
	}
	
	function count_perkara($akses) {
		return $this->db->query("SELECT*FROM proses_perkara WHERE akses='$akses'");
	}
	
	//function count_pns() {
	//	return $this->db->query("SELECT COUNT(nip) FROM pns");
	//}
	
	//function count_lalin() {
	//	return $this->db->query("SELECT COUNT(no_pelanggaran) FROM pelanggaran_lalin");
	//}


  }


 ?>
