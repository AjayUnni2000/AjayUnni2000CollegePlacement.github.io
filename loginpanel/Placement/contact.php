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
            <li><a href="company.php">Companies</a></li>
            <li><a class="active" href="contact.php">Contact</a></li>
	     <li><a href="logout.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

	<div class="section-title">
          <h2>Contact Details</h2>
        </div>

     
<script language="javascript" type="text/javascript">
</script>
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
			<th>Email</th>
      			<th>Subject</th>
			<th>Message</th>
		</tr>
	</thead>
	<tbody>
    		<?php 

		include('../database.php');
		$sql="select * from contact";	
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
							
		      	<td><?= $row['email']; ?></td>
      
      			<td><?= $row['subjects']; ?></td>
      
      			<td><?= $row['messages']; ?></td>
               		   				
		</tr>
    		<?php $i++;} ?> 
    
	</tbody>
</table>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Ettumanoorappan College</span></strong>. All Rights Reserved
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