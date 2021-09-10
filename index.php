<?php
	//include class controller
	include "controller/controller_pegawai.php";
	
	//variabel main merupakan objek baru yang dibuat dari class controller
	$main = new controller();

    //kondisi awal (menampilkan seluruh data)
    if (isset($_GET['i'])){
		$main->view_post(); //kondisi untuk mengakses halaman add
	} else if (isset($_GET['e'])) {
		$main->view_put($_GET['e']); //kondisi untuk mengakses halaman put
	} else if (isset($_GET['d'])) {
		$main->delete($_GET['d']); //kondisi untuk hapus data
	} else {
		$main->view_index(); //kondisi awal (menampilkan seluruh data)
	}
?>