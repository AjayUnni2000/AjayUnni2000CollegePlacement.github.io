<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ettumanoorappan College</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/etm.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="indexhome.php"><img src="assets/img/etm.png" rel="icon">&nbsp;Ettumanoorappan College</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="indexhome.php">Home</a></li>
          <li><a href="photo.php">Photos</a></li>
          <li><a class="active" href="company.php">Companies</a></li>
          <li><a href="contact.php">Contact</a></li>
	  <li><a href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Recruiting Companies</h2>
        </div>

 <table id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th class="center">
				<label class="pos-rel">
					<input type="checkbox" class="ace" />
					<span class="lbl"></span>
				</label>
			</th>
			<th>Sl. No</th>
			<th>Name</th>
			<th>Logo</th>
			<th>Details</th>
		</tr>
	</thead>
	<tbody>
    		<?php 

		include('../database.php');
		$sql="select * from company ORDER BY companyid ASC";	
		$result = mysqli_query($conn, $sql); $i=1;
            	while($row = mysqli_fetch_assoc($result)){
             	?>
		<tr>
			<td class="center">
				<label class="pos-rel">
					<input type="checkbox" class="ace" />
					<span class="lbl"></span>
				</label>
			</td>
			<td>
				<a href="#"><?= $i; ?></a>
			</td>
      
      			<td><?= $row['name']; ?></td>
							
			<td><?= $row['logo']; ?></td>
      
      			<td><?= $row['details']; ?></td>
               		   				
		</tr>
    		<?php $i++;} ?> 
    
	</tbody>
</table>

<div class="section-title">
          <h2>ADD Companies</h2>
        </div>

        <div class="col-6">
      <form action="addcompany.php" method="post">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Logo: &nbsp;&nbsp;</label>
          <input type="file" name="logo" id="logo" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Details</label>
          <textarea name="details" id="details" rows="5" class="form-control" required></textarea>
        </div>
        
        <div class="text-center"><button type="submit" name="submit" style="  background-color: blue;  border: none;  color: white; height:50px; width:200px;  text-decoration: none;  display: inline-block;
          font-size: 16px;  margin: 4px 2px;  cursor: pointer;">Add</button></div>
      </form><br>

      </div>
    </section><!-- End Resume Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ettumanoorappan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">@jay</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>