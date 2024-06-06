<?php
	error_reporting(E_ALL & ~E_NOTICE);
	function unit($kode){
		include "config/koneksi.php";
		$unit="";
		if($kode<>""){
			$qr=mysqli_query($koneksi, "select * from unit where id_unit='$kode'");
			$cari=mysqli_fetch_assoc($qr);
			if($cari[nama_unit]<>"") $unit=$cari[nama_unit];
		}
		return $unit;		 
	}
	function jfu($kode){
		include "config/koneksi.php";
		$jfu="";
		$cari=mysqli_fetch_assoc(mysqli_query($koneksi, "select * from fungsional where id_fungs='$kode'"));
		if($cari[nama_fungs]<>"") $jfu=$cari[nama_fungs];
		return $jfu;		 
	}
	function kelas($kode){
		include "config/koneksi.php";
		$kelas="";
		$cari=mysqli_fetch_assoc(mysqli_query($koneksi, "select * from kelas where id_kelas='$kode'"));
		if($cari[nama_kelas]<>"") $jfu=$cari[nama_kelas];
		return $jfu;		 
	}
	function pegawai($kode){
		include "config/koneksi.php";
		$nama="";
		$cari=mysqli_fetch_assoc(mysqli_query($koneksi, "select * from user where id_user='$kode'"));
		if($cari[nama_lengkap]<>"") $nama=$cari[nama_lengkap];
		return $nama;		 
	}
	function inggris($tgl){
			$tanggal = substr($tgl,0,2);
			$bulan = substr($tgl,3,2);
			$tahun = substr($tgl,6,4);
			return $tahun.'-'.$bulan.'-'.$tanggal;		 
	}
	
	function indonesia($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = (substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.'-'.$bulan.'-'.$tahun;		 
	}
	
	function tgl_indo($tgl){
			$tanggal = substr($tgl,8,2);
			$bulan = getBulan(substr($tgl,5,2));
			$tahun = substr($tgl,0,4);
			return $tanggal.' '.$bulan.' '.$tahun;		 
	}	

	function getHari($d){
		switch ($d){
					case 0: 
						return "Minggu";
						break;
					case 1: 
						return "Senin";
						break;
					case 2:
						return "Selasa";
						break;
					case 3:
						return "Rabu";
						break;
					case 4:
						return "Kamis";
						break;
					case 5:
						return "Jumat";
						break;
					case 6:
						return "Sabtu";
						break;
				}
	} 
	
	function getBulan($bln){
				switch ($bln){
					case 1: 
						return "Januari";
						break;
					case 2:
						return "Februari";
						break;
					case 3:
						return "Maret";
						break;
					case 4:
						return "April";
						break;
					case 5:
						return "Mei";
						break;
					case 6:
						return "Juni";
						break;
					case 7:
						return "Juli";
						break;
					case 8:
						return "Agustus";
						break;
					case 9:
						return "September";
						break;
					case 10:
						return "Oktober";
						break;
					case 11:
						return "November";
						break;
					case 12:
						return "Desember";
						break;
				}
			} 
?>
