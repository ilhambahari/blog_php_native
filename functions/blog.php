<?php 


function escape($data){
	global $koneksi;

	return mysqli_real_escape_string($koneksi, $data);
}

function tampilkan(){
	global $koneksi;

	$query = "SELECT * FROM blog";

	if( $result = mysqli_query($koneksi, $query) or die('Gagal menampilkan data') ){

		return $result;
	} 
}

function tampilkan_per_id($id){
	global $koneksi;

	$query = "SELECT * FROM blog WHERE id=$id";

	if( $result = mysqli_query($koneksi, $query) or die('Gagal menampilkan data') ){

		return $result;
	} 
}

function tambah_data($judul, $isi, $tag){
	global $koneksi;

	$judul = escape($judul);
	$isi = escape($isi);
	$tag = escape($tag);

	$query = "INSERT INTO blog (judul, isi, tag) VALUES ('$judul', '$isi', '$tag')";

	if( mysqli_query($koneksi, $query) ) return true;
	else return false;

}

function edit_data($judul, $isi, $tag, $id){
	global $koneksi;

	$judul = escape($judul);
	$isi = escape($isi);
	$tag = escape($tag);

	$query = "UPDATE blog SET judul='$judul', isi='$isi', tag='$tag'WHERE id=$id";

	if( mysqli_query($koneksi, $query) ) return true;
	else return false;
}

function hapus_data($id){
	global $koneksi;

	$query = "DELETE FROM blog WHERE id=$id";

	if( mysqli_query($koneksi, $query) ) return true;
	else return false;
}

function cari_data($cari){
	global $koneksi;

	$query = "SELECT * FROM blog WHERE judul LIKE '%$cari%'";

	if( $result = mysqli_query($koneksi, $query) or die('Gagal menampilkan data') ){

		return $result;
	} 
}

function excerpt($string){
	$string = substr($string, 0, 100);

	return $string . '...';
}

 ?>