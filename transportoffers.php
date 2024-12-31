
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">


  <title>Moderna Bootstrap Template - Index</title>
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
      <div class="section-title">
        <h2>Izberite vrsto prevoza</h2>
      </div>

      <div class="row justify-content-center">
        <!-- FTL Section -->
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5">
          <div class="icon-box icon-box-pink text-center">
            <div class="icon mb-4">
              <i class="bi bi-truck" style="font-size: 4rem;"></i>
            </div>
            <h4 class="title">FTL Povpraševanje</h4>
            <button class="btn btn-danger" id="showFtlForm">Izračunaj</button>
          </div>
        </div>

        <!-- LTL Section -->
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5">
          <div class="icon-box icon-box-pink text-center">
            <div class="icon mb-4">
              <i class="bi bi-box-seam" style="font-size: 4rem;"></i>
            </div>
            <h4 class="title">LTL Povpraševanje</h4>
            <button class="btn btn-danger" id="showLtlForm">Izračunaj</button>
          </div>
        </div>
      </div>

      <!-- FTL Form (Initially Hidden) -->
      <div id="ftlFormContainer" class="row justify-content-center" style="display:none;">
        <div class="col-lg-8">
          <div class="card p-5 shadow-lg" style="border-radius: 10px;">
            <h5 class="text-center mb-4" style="font-weight: bold;">Izpolnite podatke za FTL</h5>
            <form id="ftlForm">
              <div class="mb-3">
                <label for="ftlPickUpCountry" class="form-label">Nakladanje - Izberite državo</label>
                <select id="ftlPickUpCountry" class="form-select form-control form-control-lg" required>
                  <option value="">Izberite državo...</option>
                  <option value="Slovenija">Slovenija</option>
                  <option value="Italija">Italija</option>
                  <option value="Hrvaška">Hrvaška</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="ftlPickUpPostalCode" class="form-label">Poštna številka - Nakladanje</label>
                <input type="text" class="form-control form-control-lg" id="ftlPickUpPostalCode" placeholder="Vnesite poštno številko" required>
              </div>
              <div class="mb-3">
                <label for="ftlDropOffCountry" class="form-label">Razkladanje - Izberite državo</label>
                <select id="ftlDropOffCountry" class="form-select form-control form-control-lg" required>
                  <option value="">Izberite državo...</option>
                  <option value="Slovenija">Slovenija</option>
                  <option value="Italija">Italija</option>
                  <option value="Hrvaška">Hrvaška</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="ftlDropOffPostalCode" class="form-label">Poštna številka - Razkladanje</label>
                <input type="text" class="form-control form-control-lg" id="ftlDropOffPostalCode" placeholder="Vnesite poštno številko" required>
              </div>
              <div class="mb-3">
                <label for="FtlAdr" class="form-label">ADR</label>
                <select id="FtlAdr" class="form-select form-control form-control-lg" required>
                  <option value="">Izberite...</option>
                  <option value="Da">Da</option>
                  <option value="Ne">Ne</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary btn-lg w-100 mt-4">Pošlji</button>
            </form>
          </div>
        </div>
      </div>

      <!-- LTL Form (Initially Hidden) -->
      <div id="ltlFormContainer" class="row justify-content-center" style="display:none;">
        <div class="col-lg-8">
          <div class="card p-5 shadow-lg" style="border-radius: 10px;">
            <h5 class="text-center mb-4" style="font-weight: bold;">Izpolnite podatke za LTL</h5>
            <form id="ltlForm">
              <div class="mb-3">
                <label for="ltlPickUpCountry" class="form-label">Nakladanje - Izberite državo</label>
                <select id="ltlPickUpCountry" class="form-select form-control form-control-lg" required>
                  <option value="">Izberite državo...</option>
                  <option value="Slovenija">Slovenija</option>
                  <option value="Italija">Italija</option>
                  <option value="Hrvaška">Hrvaška</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="ltlPickUpPostalCode" class="form-label">Poštna številka - Nakladanje</label>
                <input type="text" class="form-control form-control-lg" id="ltlPickUpPostalCode" placeholder="Vnesite poštno številko" required>
              </div>
              <div class="mb-3">
                <label for="ltlDropOffCountry" class="form-label">Razkladanje - Izberite državo</label>
                <select id="ltlDropOffCountry" class="form-select form-control form-control-lg" required>
                  <option value="">Izberite državo...</option>
                  <option value="Slovenija">Slovenija</option>
                  <option value="Italija">Italija</option>
                  <option value="Hrvaška">Hrvaška</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="ltlDropOffPostalCode" class="form-label">Poštna številka - Razkladanje</label>
                <input type="text" class="form-control form-control-lg" id="ltlDropOffPostalCode" placeholder="Vnesite poštno številko" required>
              </div>
              <!-- New LTL Fields -->
              <div class="mb-3">
                <label for="ltlPalletType" class="form-label">Vrsta palete</label>
                <select id="ltlPalletType" class="form-select form-control form-control-lg" required>
                  <option value="">Izberite vrsto palete...</option>
                  <option value="EU pal">EU pal</option>
                  <option value="American pal">American pal</option>
                  <option value="Package">Package</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="ltlHeight" class="form-label">Višina (v cm)</label>
                <input type="number" class="form-control form-control-lg" id="ltlHeight" placeholder="Vnesite višino" required>
              </div>
              <div class="mb-3">
                <label for="ltlWeight" class="form-label">Teža (v kg)</label>
                <input type="number" class="form-control form-control-lg" id="ltlWeight" placeholder="Vnesite težo" required>
              </div>
              <div class="mb-3">
                <label for="ltlStackable" class="form-label">Naložljiva</label>
                <select id="ltlStackable" class="form-select form-control form-control-lg" required>
                  <option value="">Izberite...</option>
                  <option value="Da">Da</option>
                  <option value="Ne">Ne</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="ltlAdr" class="form-label">ADR</label>
                <select id="ltlAdr" class="form-select form-control form-control-lg" required>
                  <option value="">Izberite...</option>
                  <option value="Da">Da</option>
                  <option value="Ne">Ne</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary btn-lg w-100 mt-4">Pošlji</button>
            </form>
          </div>
        </div>
      </div>

      <!-- New Contact Info Fields (Initially Hidden) -->
      <div id="contactInfoContainer" style="display:none;">
        <form id="contactForm">
          <div class="mb-3">
            <label for="companyName" class="form-label">Naziv podjetja</label>
            <input type="text" class="form-control form-control-lg" id="companyName" placeholder="Vnesite naziv podjetja" required>
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Ime</label>
            <input type="text" class="form-control form-control-lg" id="firstName" placeholder="Vnesite ime" required>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label">Priimek</label>
            <input type="text" class="form-control form-control-lg" id="lastName" placeholder="Vnesite priimek" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Telefon</label>
            <input type="tel" class="form-control form-control-lg" id="phone" placeholder="Vnesite telefonsko številko" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control form-control-lg" id="email" placeholder="Vnesite vaš email" required>
          </div>
          <div class="mb-3">
            <label for="contactCountry" class="form-label">Država</label>
            <select id="contactCountry" class="form-select form-control form-control-lg" required>
              <option value="">Izberite državo...</option>
              <option value="Slovenija">Slovenija</option>
              <option value="Italija">Italija</option>
              <option value="Hrvaška">Hrvaška</option>
            </select>
          </div>
        </form>
      </div>
    </div>
  </section><!-- End Services Section -->
</main>



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
    // Run this function after the page contents have loaded
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

    document.getElementById('showFtlForm').addEventListener('click', function() {
  var formContainer = document.getElementById('ftlFormContainer');
  if (formContainer.style.display === 'none') {
    formContainer.style.display = 'block';
  } else {
    formContainer.style.display = 'none';
  }
});

document.getElementById('showLtlForm').addEventListener('click', function() {
  var formContainer = document.getElementById('ltlFormContainer');
  if (formContainer.style.display === 'none') {
    formContainer.style.display = 'block';
  } else {
    formContainer.style.display = 'none';
  }
});

// Function to reveal contact fields after FTL form submission
document.getElementById('ftlForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Prevent page refresh
  document.getElementById('contactInfoContainer').style.display = 'block'; // Show contact fields
});

// Function to reveal contact fields after LTL form submission
document.getElementById('ltlForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Prevent page refresh
  document.getElementById('contactInfoContainer').style.display = 'block'; // Show contact fields
});


    
  </script>
  
</body>

<style>.background-box {
  background-color: rgba(83, 25, 35, 0.342); /* Dark Blue with 50% transparency */
  padding: 15px;
  border-radius: 10px;
}


body {
    font-family: 'Open Sans', sans-serif;
    color: #333;
    background-color: #f8f9fa;
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Roboto', sans-serif;
}


.section-title h2 {
    color: #004a7c;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 15px;
}

.btn-get-started {
    background-color: #008cba;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.btn-get-started:hover {
    background-color: #005f73;
}

.icon-box {
    padding: 30px;
    position: relative;
    overflow: hidden;
    background: #f7f7f7;
    box-shadow: 0px 10px 29px 0px rgba(68, 88, 144, 0.1);
    transition: all 0.3s ease-in-out;
}

.icon-box:hover {
    transform: translateY(-10px);
}

.footer {
    background-color: #333;
    color: #f2f2f2;
    padding: 40px 0;
}

#ftlFormContainer .card {
  background-color: #f8f9fa;
  border: 1px solid #e3e6f0;
}

#ftlFormContainer .form-label {
  font-weight: bold;
}

#ftlFormContainer .form-control {
  border-radius: 8px;
  border: 1px solid #ced4da;
}

#ftlFormContainer button[type="submit"] {
  background-color: #ff6f61;
  border-color: #ff6f61;
  font-weight: bold;
}

#ftlFormContainer button[type="submit"]:hover {
  background-color: #ff3d34;
  border-color: #ff3d34;
}


</style>

</html>
<?php include 'footer.php'; ?>
