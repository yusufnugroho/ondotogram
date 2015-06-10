<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pasien extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function getDataPasien()
	{
		return $this->db->query("select * from pasien where 1");
	}
        public function active($id_pasien)
	{
		$this->db->query("update pasien set status_pasien ='Aktif' where id_pasien='$id_pasien'");
	}
        public function deactive($id_pasien)
	{
		$this->db->query("update pasien set status_pasien ='Tidak Aktif' where id_pasien='$id_pasien'");
	}
        public function insert($user_pasien,$password_pasien,$nama_lengkap_pasien,$identitas_pasien,$tanggal_lahir_pasien,$jenis_kelamin_pasien,$alamat_rumah_pasien,$hp_pasien)
	{
		//$this->db->query("INSERT INTO `dokter`('user_dokter','password_dokter','nama_lengkap_dokter','identitas_dokter','jenis_kelamin_dokter','alamat_dokter','hp_dokter','status_dokter') VALUES ('$user_dokter','$password_dokter','$nama_lengkap_dokter','$identitas_dokter','$jenis_kelamin_dokter','$alamat_dokter','$hp_dokter','Aktif')");
                //$this->db->query("INSERT INTO `dokter`(`user_dokter`, `password_dokter`, `nama_lengkap_dokter`, `identitas_dokter`, `jenis_kelamin_dokter`, `alamat_dokter`, `hp_dokter`, `status_dokter`) VALUES ('$user_dokter','$password_dokter','$nama_lengkap_dokter','$identitas_dokter','$jenis_kelamin_dokter','$alamat_dokter','$hp_dokter','Tidak Aktif')");
                $this->db->query("INSERT INTO `pasien`( `user_pasien`, `password_pasien`, `nama_lengkap_pasien`, `identitas_pasien`, "
                        . "`tanggal_lahir_pasien`,`jenis_kelamin_pasien`,  `alamat_rumah_pasien`, `hp_pasien`, `status_pasien`) "
                        . "VALUES ('$user_pasien','$password_pasien','$nama_lengkap_pasien','$identitas_pasien','$tanggal_lahir_pasien','$jenis_kelamin_pasien','$alamat_rumah_pasien','$hp_pasien','Tidak Aktif')");
        }
        public function hapusPasien($param)
        {
            $this->db->query("DELETE FROM `pasien` WHERE id_pasien='$param'");
        }
        //Pasien Debug On (Loading)


        
        
        
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
