<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_dokter extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataDokter()
	{
		return $this->db->query("select * from Dokter where 1");
	}
        public function active($id_dokter)
	{
		$this->db->query("update dokter set status_dokter ='Aktif' where id_dokter='$id_dokter'");
	}
        public function deactive($id_dokter)
	{

		$this->db->query("update dokter set status_dokter ='Tidak Aktif' where id_dokter='$id_dokter'");
	}
        public function insert($user_dokter,$password_dokter,$nama_lengkap_dokter,$identitas_dokter,$jenis_kelamin_dokter,
                    $alamat_dokter,$hp_dokter)
	{
		//$this->db->query("INSERT INTO `dokter`('user_dokter','password_dokter','nama_lengkap_dokter','identitas_dokter','jenis_kelamin_dokter','alamat_dokter','hp_dokter','status_dokter') VALUES ('$user_dokter','$password_dokter','$nama_lengkap_dokter','$identitas_dokter','$jenis_kelamin_dokter','$alamat_dokter','$hp_dokter','Aktif')");
                $this->db->query("INSERT INTO `dokter`(`user_dokter`, `password_dokter`, `nama_lengkap_dokter`, `identitas_dokter`, `jenis_kelamin_dokter`, `alamat_dokter`, `hp_dokter`, `status_dokter`) VALUES ('$user_dokter','$password_dokter','$nama_lengkap_dokter','$identitas_dokter','$jenis_kelamin_dokter','$alamat_dokter','$hp_dokter','Tidak Aktif')");
                
        }
        
        
        
        
        public function getDataDokterActive()
	{
		return $this->db->query("select * from Dokter where STATUS_DOSEN='Aktif'");
	}
	
	public function update($nipdokter,$depanDokter,$belakangDokter,$hpDokter)
	{
		$this->db->query("update Dokter set NIP_DOSEN = '$nipdokter', NAMA_DEPAN_Dokter = '$depanDokter', NAMA_BELAKANG_Dokter = '$belakangDokter', TELEPON_Dokter = '$hpDokter' where NIP_DOSEN = '$nipdokter'");
	}
	public function hapusDokter($nrp)
	{
		$this->db->query("update Dokter set STATUS_DOSEN ='Tidak Aktif' where NIP_DOSEN='$nrp'");
	}
	public function getData($nip)
	{
		return $this->db->query("select * from Dokter where NIP_DOSEN='$nip'");
	}
        
	public function select_where($tablename, $where)
	{
		$data = $this->db->get_where($tablename, $where);
		return $data->result_array();
	}
}
