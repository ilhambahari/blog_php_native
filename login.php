<?php 

require_once "core/init.php";

$error = '';

if( isset($_SESSION['user']) ){
	header('Location: index.php');
}

if( isset($_POST['submit']) ){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if( !empty(trim($username)) && !empty(trim($password)) ){
		if( cek_data($username, $password) ){
			Session::flash('login', 'Selamat datang Admin');
			$_SESSION['user'] = $username;
			header('Location: index.php');
		}else{	
			$error = 'Username atau Password salah';
		}
	}else{
		$error = 'Username dan Password tidak boleh kosong';
	}
	
}



require_once "view/header.php";


 ?>

 <br><br>
 <div class="contianer">
 	
	 
	<div class="col-md-4 offset-4">
		<?php if( $error ) : ?>
			<div class="alert alert-danger" role="alert">
			  <?= $error; ?>
			</div>
		<?php endif; ?>	
		<form action="" method="POST">
		  <div class="form-group">
		    <label for="username">Username</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
		  </div>
		  <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
		</form>
	</div>

</div>
 