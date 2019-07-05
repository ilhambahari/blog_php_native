<?php 

require_once "core/init.php";

if( !isset($_SESSION['user']) ){
	header('Location: index.php');
}

$error = '';

if( isset($_POST['submit']) ){
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$tag = $_POST['tag'];

	if( !empty(trim($judul)) && !empty(trim($isi)) ){
		if( tambah_data($judul, $isi, $tag) ){
			header('Location: index.php');
		}else{	
			$error = 'Gagal memasukkan data';
		}
	}else{
		$error = 'Judul dan Isi Blog tidak boleh kosong';
	}
	
}



require_once "view/header.php";


 ?>

 <br><br>
<div class="col-sm-6 offset-3">
	<?php if( $error ) : ?>
		<div class="alert alert-danger" role="alert">
		  <?= $error; ?>
		</div>
	<?php endif; ?>	

	<script type="text/javascript" src="view/js/ckeditor/ckeditor.js"></script>
	<!-- <script type="text/javascript" src="view/js/ckeditor/plugins/uploadimage/plugin.js"></script>
	<script type="text/javascript" src="view/js/ckeditor/adapters/jquery/jquery.js"></script> -->
	<form action="" method="POST">
	  <div class="form-group">
	    <label for="judul">Judul</label>
	    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
	  </div>
	  <div class="form-group">
	    <label for="editor">Isi Blog</label>
	    <textarea class="form-control" id="editor"" name="isi" placeholder="Isi Blog"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="tag">Tag</label>
	    <input type="text" class="form-control" id="tag" name="tag" placeholder="Tag Blog">
	  </div>
	  <button type="submit" name="submit" class="btn btn-default">Submit</button>
	</form>
</div>

 <script>
   CKEDITOR.replace("editor");
</script>