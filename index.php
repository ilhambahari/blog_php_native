<?php 

require_once "core/init.php";

$blog = tampilkan();

$login = false;
if( isset($_SESSION['user']) ){
	$login = true;
}

if(Session::exists('login')){
  echo Session::flash('login');
}

if( isset($_GET['cari']) ){
	$cari = $_GET['cari'];
	$blog = cari_data($cari);
}

require_once "view/header.php";


 ?>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h2 class="my-4">Selamat Membaca	
            <br><p class="lead">Sedikit tulisan ini semoga bermanfaat</p>
          </h2>

          <?php while($row = mysqli_fetch_assoc($blog)) : ?>
          <!-- Blog Post -->
	          <div class="card mb-4">
	    <!--         <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
	            <div class="card-body">
	              <h2 class="card-title"><?= $row['judul']; ?></h2>
	              <p class="card-text"><?= excerpt($row['isi']); ?></p>
	              <a href="single.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Read More &rarr;</a>
	            </div>
	            <div class="card-footer text-muted">
	              Posted on <?= $row['waktu']; ?>
	              <!-- <a href="#">By : Start Bootstrap</a><br> -->
	              <p class="card-text">Kategori : <?= $row['tag']; ?></p>
	              <?php if( $login == true ) : ?>
		              <a href="edit.php?id=<?= $row['id']; ?>" class="btn">Edit</a>
		              <a href="delete.php?id=<?= $row['id']; ?>" class="btn">Delete</a>
	         	 <?php endif; ?>
	            </div>
	          </div>
      	  <?php endwhile; ?>


          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
              	<form action="" method="GET">
                	<input type="search" name="cari" class="form-control" placeholder="Search for...">
              	</form>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
        <!--   <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->

          <!-- Side Widget -->
          <!-- <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>
 -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php require_once "view/footer.php"; ?>    
