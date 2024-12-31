<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services - Moderna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">


<!-- Box Structure -->
<div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
  <div class="icon-box icon-box-cyan">
      <div class="icon"><i class="bx bx-file"></i></div>
      <button onclick="openPopup()" class="btn btn-primary">Naroči prevoz blaga</button>
            <p class="description">Kliknite tukaj in izpolnite obrazec za povpraševanje po prevozu.</p>
  </div>
</div>




<!-- Box Structure for LTL -->
<div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
  <div class="icon-box icon-box-cyan">
      <div class="icon"><i class="bx bx-file"></i></div>
      <button onclick="openPopup()" class="btn btn-primary">Najemi skladišče za palete</button>
            <p class="description">Kliknite tukaj in izpolnite obrazec za najem skladišča.</p>
  </div>
</div>


<!-- Box Structure for Warehouse Rental -->
<div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
  <div class="icon-box icon-box-cyan">
      <div class="icon"><i class="bx bx-file"></i></div>
      <button onclick="openPopup()" class="btn btn-primary">Naroči servis vozila</button>
            <p class="description">Kliknite tukaj in izpolnite obrazec za servis tovornega vozila.</p>
  </div>
</div>



        </div>

      </div>
    </section><!-- End Services Section -->

    
    

  </main><!-- End #main -->

   
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function openPopup() {
        window.open('modalContent.html', 'popup', 'width=600,height=600,scrollbars=no,resizable=no');
    }
    window.addEventListener('DOMContentLoaded', (event) => {
    // Get the current page from the window location's pathname
    let currentPage = window.location.pathname.split('/').pop();

    // Get all 'a' elements within the navbar
    let navLinks = document.querySelectorAll('#navbar a');

    // Loop over each link
    navLinks.forEach(link => {
      // Remove 'active' class from all links
      link.classList.remove('active');
      
      // If the href attribute of the link matches the current page, add the 'active' class
      if(link.getAttribute('href') === currentPage) {
        link.classList.add('active');
      }
    });
  });
    
    </script>
</body>

</html>

<?php include 'footer.php'; ?>
