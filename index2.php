<!-- Main Index File: index.html -->
<!DOCTYPE html>
<html lang="sl">

<head>
  <!-- Meta Tags and Favicons -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>B. Makovec
</title>
  <meta content="Makovec Transport logistične storitve." name="description">
  <meta content="logistika, transport, prevoz, Slovenija" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Custom CSS Files -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/header.css" rel="stylesheet"> <!-- Include header.css -->
</head>


<body>
  <!-- Header Include -->
  <div id="header-placeholder"></div>
  <!-- Hero Section -->
  <section id="hero" class="d-flex justify-content-center align-items-center position-relative">
    <section id="hero" class="d-flex justify-content-center align-items-center position-relative">
      <img src="assets/img/homepage.jpg" alt="Homepage background" class="position-absolute w-100 h-100" style="object-fit: cover;">
      <div id="heroCarousel" class="container carousel carousel-fade position-relative text-center text-light" data-bs-ride="carousel" data-bs-interval="5000">
    <div id="heroCarousel" class="container carousel carousel-fade position-relative text-center text-light" data-bs-ride="carousel" data-bs-interval="5000">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container text-dark rounded p-4" style="background-color: rgba(255, 255, 255, 0.15);">
          <h2 class="fw-bold">Mednarodni Prevozi</h2>
          <p>Zagotavljamo hitre in zanesljive prevoze po celotni Evropi.</p>
        </div>
      </div>
      <!-- Slide 2 -->

      <div class="carousel-item">
        <div class="carousel-container text-dark rounded p-4" style="background-color: rgba(255, 255, 255, 0.15);">
          <h2 class="fw-bold">Skladiščenje</h2>
          <p>Ponujamo varno skladiščenje vašega blaga s popolno sledljivostjo.</p>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container text-dark rounded p-4" style="background-color: rgba(255, 255, 255, 0.15);">
          <h2 class="fw-bold">Distribucija</h2>
          <p>Distribuiramo vaše blago po Sloveniji in širše z najvišjo stopnjo zanesljivosti.</p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <!-- Manual Left/Right Arrows -->
    <div class="d-flex justify-content-between w-100 position-absolute" style="top: 50%; transform: translateY(-50%);">
      <button class="btn btn-outline-light ms-3" onclick="document.querySelector('.carousel-control-prev').click();">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button class="btn btn-outline-light me-3" onclick="document.querySelector('.carousel-control-next').click();">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </section>

  <!-- Footer Include -->
  <div id="footer-placeholder"></div>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <!-- Custom JS Files -->
  <script src="assets/js/header.js"></script> <!-- Include header.js -->
  <script src="assets/js/main.js"></script> <!-- Your main JS file -->

  <!-- Initialize AOS -->
  <script>
    AOS.init();
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>

  <!-- Load header and footer, and initialize header scripts -->
  <script>
    // Load header and footer
    document.addEventListener("DOMContentLoaded", function () {
      fetch('header.html')
        .then(response => response.text())
        .then(data => {
          document.getElementById('header-placeholder').innerHTML = data;
          // After header is loaded, initialize header scripts
          initHeaderScripts();
        })
        .catch(error => console.error('Error loading header:', error));

      fetch('footer.html')
        .then(response => response.text())
        .then(data => {
          document.getElementById('footer-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Error loading footer:', error));
    });
  </script>
</body>

</html>

