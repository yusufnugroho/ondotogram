<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_medis extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function get($table)
	{
		return $this->db->get($table);
	}
        public function getDataOdontogram()
	{
		return $this->db->query("select * from gigi where 1");
	}
        public function getDataGigi()
	{
		return $this->db->query("select * from pasien where 1");
	}
         /*public function insert()
	{
		//$this->db->query("INSERT INTO `dokter`('user_dokter','password_dokter','nama_lengkap_dokter','identitas_dokter','jenis_kelamin_dokter','alamat_dokter','hp_dokter','status_dokter') VALUES ('$user_dokter','$password_dokter','$nama_lengkap_dokter','$identitas_dokter','$jenis_kelamin_dokter','$alamat_dokter','$hp_dokter','Aktif')");
                //$this->db->query("INSERT INTO `dokter`(`user_dokter`, `password_dokter`, `nama_lengkap_dokter`, `identitas_dokter`, `jenis_kelamin_dokter`, `alamat_dokter`, `hp_dokter`, `status_dokter`) VALUES ('$user_dokter','$password_dokter','$nama_lengkap_dokter','$identitas_dokter','$jenis_kelamin_dokter','$alamat_dokter','$hp_dokter','Tidak Aktif')");
                $this->db->query("INSERT INTO `pasien`( `user_pasien`, `password_pasien`, `nama_lengkap_pasien`, `identitas_pasien`, "
                        . "`jenis_kelamin_pasien`,  `alamat_rumah_pasien`, `hp_pasien`, `status_pasien`) "
                        . "VALUES ('$user_pasien','$password_pasien','$nama_lengkap_pasien','$identitas_pasien','$jenis_kelamin_pasien','$alamat_rumah_pasien','$hp_pasien','Tidak Aktif')");
        }*/
         public function insert($value)
	{
		
                //$this->db->query("INSERT INTO `pasien`( `G18`) "
                 //       . "VALUES ('$value')");
                $this->db->query("INSERT INTO `gigi`( `G18`) VALUES ('$value')");
        }
        
}
