<?php
class identitas{
	public $nama;
	public $tempatlahir;
	public $kelas;
	public $status;

	public function __construct(){

	} 
	//nama
	public function set_nama($nama)
	{
		$this-> nama = $nama;
	}
	public function get_nama()
	{
		return $this-> nama;
	}
	//tempat lahir
	public function set_tempatlahir($tempatlahir)
	{
		$this-> tempatlahir = $tempatlahir;
	}
	public function get_tempatlahir()
	{
		return $this-> tempatlahir;
	}
	//kelas
	public function set_kelas($kelas)
	{
		$this-> kelas = $kelas;
	}
	public function get_kelas()
	{
		return $this-> kelas;
	}
	//status
	public function set_status($status)
	{
		$this-> status = $status;
	}
	public function get_status()
	{
		return $this-> status;
	}
}

?>