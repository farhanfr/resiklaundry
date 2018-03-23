<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
KETERANGAN TINGKATAN HAK AKSES
1.User=Pelanggan('registerasi,login,update,delete data dirinya sendiri,transaksi')

2.Admin=Pegawai('registerasi,login,update,delete data dirinya sendiri,melihat data pelanggan kecuali username dan passwordnya,melihat feedback pelanggan,statistik,melihat transaksi')

3.SuperAdmin=AdminTinggi('Mengatur User dan Admin')

*/
/*
CARA AKSES (JIKA PAKAI LOCAL)
http://localhost/ci_resiklaundry/index.php/Con_resiklaundry/dash_logad (ADMIN)
http://localhost/ci_resiklaundry (PELANGGAN)
*/

class Mo_resiklaundry extends CI_Model {

/*USER ZONE*/
/*REGISTER USER*/
	public function regpel_proc(){
		$namapel=$this->input->post('namapel');
		$alapel=$this->input->post('alapel');
		$nopel=$this->input->post('nopel');
		$emapel=$this->input->post('emapel');
		$usernamepel=$this->input->post('usernamepel');
		$passwordpel=md5($this->input->post('passwordpel'));

		$data=array(
			'id_pelanggan'=>null,
			'namapel'=>$namapel,
			'alapel'=>$alapel,
			'nopel'=>$nopel,
			'emapel'=>$emapel,
			'usernamepel'=>$usernamepel,
			'passwordpel'=>$passwordpel);

		$this->db->insert('pelanggan',$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	/*CHECK DUPLICATE ENTRY DATA*/
	public function check_regpelduplicate($usernamepel){
		$sql="SELECT * FROM pelanggan WHERE usernamepel='$usernamepel'";
		$query=$this->db->query($sql);

		if ($query->num_rows() == 0) {
			return false;
		}
		else{
			return true;
		}

	}

	/*LOGIN USER*/
	public function logipel_proc(){
		$usernamepel=$this->input->post('usernamepel');
		$passwordpel=$this->input->post('passwordpel');

	$where=array(
		'usernamepel'=>$usernamepel,
		'passwordpel'=>md5($passwordpel));
	$check=$this->db->get_where('pelanggan',$where)->num_rows();
	$fetch=$this->db->get_where('pelanggan',$where)->row_array();

	if ($check > 0) {
		$give_sess=array(
			'id_pelanggan'=>$fetch['id_pelanggan'],
			'emapel'=>$fetch['emapel'],
			'namapel'=>$fetch['namapel'],
			'usernamepel'=>$usernamepel,
			'login'=>true);
		$this->session->set_userdata($give_sess);

		return true;
	}
	else{
		return false;
	}

}

	/*UPDATE DATA USER*/
	public function uppel_proc($data,$where,$table){	
	$this->db->where($where);
	$this->db->update($table,$data);	
	}
	/*DELETE ACCOUNT USER*/
	public function delpel_proc($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	/*FEEDBACK USER*/
	public function feedpel_proc(){
		$data=array(
			'id_feedbacku'=>null,
			'id_pelanggan'=>$this->session->id_pelanggan,
			'namafeedu'=>$this->session->namapel,
			'emafeedu'=>$this->session->emapel,
			'pilihfeedu'=>$this->input->post('pilihfeedu'),
			'isifeedu'=>$this->input->post('isifeedu'));
		$this->db->insert('feedback_user',$data);	
		if ($this->db->affected_rows() > 0) {

			return true;
		}
		else{
			return false;
		}
	}
	//TRANSAKSI
	public function proc_transaksi(){
		$data=array(
			'id_transaksi'=>null,
			'id_pelanggan'=>$this->session->id_pelanggan,
			'tgl_trans'=>$this->input->post('tgl_trans'),
			'namapel'=>$this->session->namapel,
			'alamatpel'=>$this->input->post('alamatpel'),
			'jenis_paket'=>$this->input->post('jenis_paket'),
			'keterangan'=>$this->input->post('keterangan'));
		$this->db->insert('transaksi',$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	//PROSES LIHAT MAIL USER
	public function proc_see_mailuser($table,$where){
		return $this->db->get_where($table,$where);
	}
	//PROSES LIHAT TRANSAKSI 
	public function proc_see_transaksi($table,$where){
		return $this->db->get_where($table,$where);
	}
	//HAPUS DATA TRANSAKSI
	public function proc_del_transaksi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}




	/*-----------------------ADMIN---------------------*/

	/*TABEL PENGATUR DATA PELANGGAN*/
	public function datapel_control_proc(){
		return $this->db->get('pelanggan');
	}
	/*PROCESS REGISTER DATA ADMIN*/
	public function regad_proc(){
		$data=array(
			'id_admin'=>null,
			'namad'=>$this->input->post('namad'),
			'emailad'=>$this->input->post('emailad'),
			'nomad'=>$this->input->post('nomad'),
			'usernamad'=>$this->input->post('usernamad'),
			'passwordad'=>$this->input->post('passwordad'),
			'status'=>$this->input->post('status'));
		$this->db->insert('admin',$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	/*CHECK DUPLICATE DATA ENTRY*/
	public function check_regadduplicate($usernamad){
		$sql2="SELECT * FROM admin WHERE usernamad='$usernamad'";
		$query2=$this->db->query($sql2);
		if ($query2->num_rows() == 0) {
			return false;
		}
		else{
			return true;
		}
	}
	/*PROCESS LOGIN ADMIN*/
	public function logad_proc(){
		$usernamad=$this->input->post('usernamad');
		$passwordad=$this->input->post('passwordad');
		$where=array(
			'usernamad'=>$usernamad,
			'passwordad'=>$passwordad);
		$check=$this->db->get_where('admin',$where)->num_rows();
		$fetch=$this->db->get_where('admin',$where)->row_array();
		if ($check > 0) {
			$get_sess=array(
				'id_admin'=>$fetch['id_admin'],
				'usernamad'=>$usernamad,
				'namad'=>$fetch['namad'],
				'login'=>true);
			$this->session->set_userdata($get_sess);
			return true;
		}
		else{
			return false;
		}
	}
	/*TABEL LIHAT DATA ADMIN*/
	public function see_alldatad_proc(){
		return $this->db->get('admin');
	}
	/*UPDATE  MY DATA ADMIN*/
	public function up_mydatad_proc($table,$data,$where){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	/*PROCESS SEE FEEDBACK FROM USER*/
	public function see_feedpel_proc(){
		return $this->db->get('feedback_user');
	}
	/*PROCESS FEEDBACK ADMIN TO USER*/
	public function feedad_proc(){
		$id=$this->input->post('id_feedbacku');
		$where=array('id_feedbacku'=>$id);
		$fetch=$this->db->get_where('feedback_user',$where)->row_array();
		$data=array(
			'id_feedbackad'=>null,
			'namad'=>$this->session->namad,
			'id_admin'=>$this->session->id_admin,
			'id_feedbacku'=>$fetch['id_feedbacku'],
			'id_pelanggan'=>$fetch['id_pelanggan'], 	
			'namafeedu'=>$fetch['namafeedu'],
			'isifeedad'=>$this->input->post('isifeedad'));
		$this->db->insert('feedback_admin',$data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}	
		else{
			return false;
		}
	}
	/*TAKE / SEE FORM & EDIT USER FOR USER*/
	public function process_form_updatapel($table,$where){
		return $this->db->get_where($table,$where);
	}
	/*FORM ADMIN*/
	public function process_detail_form_feedbackad($table,$where){
		return $this->db->get_where($table,$where);
	}
	//PROCESS SEE ADMIN STATUS 
	public function proc_see_admin_status(){
		return $this->db->get('admin');
	}
	//PILIHAN HAPUS FEEDBACK USER
	public function proc_del_feedbacku_confirm($table,$where){
		return $this->db->get_where($table,$where);
	}
	//PROCESS DEL USER
	public function proc_del_feedbacku($table,$where){
		$this->db->where($where);
		$this->db->delete($table);
	}
	//PROCESS LIHAT DATA
	public function proc_see_transaksi_foradmin(){
		return $this->db->get('transaksi');
	}

}

/* End of file Mo_resiklaundry.php */
/* Location: ./application/models/Mo_resiklaundry.php */