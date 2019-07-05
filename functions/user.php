<?php 


function cek_data($nama, $pass){
	global $koneksi;

	$nama = escape($nama);
	$pass = escape($pass);

	$pass = md5($pass);

	$query = "SELECT * FROM user WHERE username='$nama' AND password='$pass'";

	if( $result = mysqli_query($koneksi, $query) ){

		if( mysqli_num_rows($result) != 0 ) return true;
		else return false;
	}
}

 ?>
