<?php 
	include "../config/koneksi.php";

	$nim = @$_POST['nim'];
	$nim2 = @$_POST['nim2'];
	$nama = @$_POST['nama'];
	$jrsn = @$_POST['jrsn'];
	$id = @$_POST['id'];

	if(@$_GET['page'] == 'tambah') 
	{
		$anggota->tambah($nim, $nama, $jrsn);
		echo 'sukses';
	} 
	else if(@$_GET['page'] == 'edit') 
	{
		$anggota->edit($nim, $nama, $jrsn, $nim2);
		echo 'sukses';
	} 
	else if(@$_GET['page'] == 'hapus') 
	{
		$anggota->hapus($id);
		echo 'sukses';
	}
?>