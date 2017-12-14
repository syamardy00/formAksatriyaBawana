<?php
include "koneksi.php";
session_start();
function anti_injection($data){
	$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
	return $filter;
}

$nama=anti_injection($_POST['nama']);
$tgl=anti_injection($_POST['tgl']);
$bulan=anti_injection($_POST['bulan']);
$tahun=anti_injection($_POST['tahun']);
$jeniskelamin=anti_injection($_POST['jeniskelamin']);
$jurusan=anti_injection($_POST['jurusan']);
$angkatan=anti_injection($_POST['angkatan']);
$hobbi=anti_injection($_POST['hobbi']);
$email=anti_injection($_POST['email']);
$alamat=anti_injection($_POST['alamat']);
$alasan=anti_injection($_POST['alasan']);
$notlp=anti_injection($_POST['notlp']);
$bbm=anti_injection($_POST['bbm']);
$riwayat=anti_injection($_POST['riwayat']);
$asalsekolah=anti_injection($_POST['asalsekolah']);

mysql_query("insert into calonanggota2017 (nama, tgllahir, jeniskelamin, jurusan, angkatan, hobbi, email, alamat, alasan, notlp, pinbb, riwayat, asalsekolah) 
			values ('$nama','$tgl $bulan $tahun','$jeniskelamin','$jurusan','$angkatan','$hobbi','$email','$alamat', '$alasan','$notlp','$bbm','$riwayat','$asalsekolah')");

			echo"<script languange='javascript'>
			alert('Data Diri Anda Berhasil Didaftarkan, Kami Akan Mengirimkan Informasi Selanjutnya Melalui No Tlp / BBM Yang Anda Inputkan, Terima Kasih');
			document.location='index.php';
			</script>";