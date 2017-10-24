<?php
include('identitas.php');

//identitas 1
$identitas1 = new identitas();
$identitas1-> set_nama('Ica Cahyani');
$identitas1-> set_tempatlahir('Bandung');
$identitas1-> set_kelas('XI-RPL 1');
$identitas1-> set_status('Menikah');

echo "<h3>Identitas 1</h3><br>" ,
	 'Nama :'.$identitas1-> get_nama().'<br>',
	 'Tempat Lahir : '.$identitas1-> get_tempatlahir().'<br>',
	 'Kelas : '.$identitas1-> get_kelas().'<br>',
	 'Status : '.$identitas1-> get_status().'<br>';


//identitas 2
$identitas2 = new identitas();
$identitas2-> set_nama('Melan Noerjanati');
$identitas2-> set_tempatlahir('Garut');
$identitas2-> set_kelas('XI-RPL 2');
$identitas2-> set_status('Menikah dengan Diki');

echo "<h3>Identitas 2</h3><br>" ,
	 'Nama :'.$identitas2-> get_nama().'<br>',
	 'Tempat Lahir : '.$identitas2-> get_tempatlahir().'<br>',
	 'Kelas : '.$identitas2-> get_kelas().'<br>',
	 'Status : '.$identitas2-> get_status().'<br>';


//identitas 3
$identitas3 = new identitas();
$identitas3-> set_nama('Widi Ayu');
$identitas3-> set_tempatlahir('Palembang');
$identitas3-> set_kelas('XI-RPL 2');
$identitas3-> set_status('Bertunangan');

echo "<h3>Identitas 3</h3><br>" ,
	 'Nama :'.$identitas3-> get_nama().'<br>',
	 'Tempat Lahir : '.$identitas3-> get_tempatlahir().'<br>',
	 'Kelas : '.$identitas3-> get_kelas().'<br>',
	 'Status : '.$identitas3-> get_status().'<br>';


//identitas 4
$identitas4 = new identitas();
$identitas4-> set_nama('Diah Setiawatie');
$identitas4-> set_tempatlahir('Bogor');
$identitas4-> set_kelas('XI-RPL 2');
$identitas4-> set_status('Menikah');

echo "<h3>Identitas 4</h3><br>" ,
	 'Nama :'.$identitas4-> get_nama().'<br>',
	 'Tempat Lahir : '.$identitas4-> get_tempatlahir().'<br>',
	 'Kelas : '.$identitas4-> get_kelas().'<br>',
	 'Status : '.$identitas4-> get_status().'<br>';


//identitas 5
$identitas5 = new identitas();
$identitas5-> set_nama('Dina Novianti');
$identitas5-> set_tempatlahir('Bandung');
$identitas5-> set_kelas('XI-RPL 3');
$identitas5-> set_status('JOMBLO');

echo "<h3>Identitas 5</h3><br>" ,
	 'Nama :'.$identitas5-> get_nama().'<br>',
	 'Tempat Lahir : '.$identitas5-> get_tempatlahir().'<br>',
	 'Kelas : '.$identitas5-> get_kelas().'<br>',
	 'Status : '.$identitas5-> get_status().'<br>';

?>