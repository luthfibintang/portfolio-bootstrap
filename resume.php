<?php
include 'connection.php';

// Fetch education details
$educationQuery = "SELECT title, period, institution, description FROM resume WHERE section = 'Education'";
$educationResult = $conn->query($educationQuery);

// Fetch experience details
$experienceQuery = "SELECT title, period, institution, description FROM resume WHERE section = 'Experience'";
$experienceResult = $conn->query($experienceQuery);

// Fetch Social Link for Footer
$query = "SELECT `name`, link FROM `social-link`";
$res = $conn->query($query);

$socialLinks = [];
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $socialLinks[$row['name']] = $row['link'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Resume - Azisya Luthfi Bintang</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom.css" />
  </head>

  <body class="resume-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center justify-content-center"
      >
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="resume.php" class="active">Resume</a></li>
            <!-- <li><a href="services.html">Services</a></li> -->
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </header>

    <main class="main">
      <!-- Page Title -->
      <div class="page-title pt-3" data-aos="fade">
        <div class="mt-5 pt-5">
          <div class="container">
            <div class="row d-flex justify-content-center text-center">
              <div class="col-lg-8">
                <h1>Resume</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Title -->

      '
      <!-- Resume Section -->
      <section id="resume" class="resume section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Sumary</h3>

              <div class="resume-item pb-0">
                <h4>Azisya Luthfi Bintang</h4>
                <p>
                  <em
                    >Web Developer with experience in building responsive,
                    user-focused applications. Skilled in Tailwind CSS,
                    Bootstrap 5, and the MERN Stack. Passionate about continuous
                    learning and delivering efficient web solutions.
                  </em>
                </p>
              </div>
              <!-- Edn Resume Item -->

              <h3 class="resume-title">Education</h3>
              <?php while($education = $educationResult->fetch_assoc()): ?>
                <div class="resume-item">
                  <h4><?php echo $education['title']; ?></h4>
                  <h5><?php echo $education['period']; ?></h5>
                  <p><em><?php echo $education['institution']; ?></em></p>
                  <p><?php echo $education['description']; ?></p>
                </div>
              <?php endwhile; ?>
              <!-- Edn Resume Item -->
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <h3 class="resume-title">Experience</h3>
              <?php while($experience = $experienceResult->fetch_assoc()): ?>
                <div class="resume-item">
                  <h4><?php echo $experience['title']; ?></h4>
                  <h5><?php echo $experience['period']; ?></h5>
                  <p><em><?php echo $experience['institution']; ?></em></p>
                  <ul>
                    <?php
                      // Explode the description into an array using the period as a delimiter
                      $tasks = explode('.', $experience['description']);
                      // Loop through each task and create a list item
                      foreach ($tasks as $task) {
                        $task = trim($task); // Trim whitespace
                        if (!empty($task)) { 
                          echo '<li>' . htmlspecialchars($task) . '.</li>';
                        }
                      }
                    ?>
                  </ul>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- /Resume Section -->'
    </main>

    <footer id="footer" class="footer dark-background">
      <div class="container">
        <p>My Social:</p>
        <div class="social-links d-flex justify-content-center">
          <a target="_blank" href="<?= $socialLinks['github'] ?>"><i class="bi bi-github"></i></a>
          <a target="_blank" href="<?= $socialLinks['instagram'] ?>"><i class="bi bi-instagram"></i></a>
          <a target="_blank" href="<?= $socialLinks['linkedin'] ?>"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </footer>

    <!-- Scroll Top -->
    <a
      href="#"
      id="scroll-top"
      class="scroll-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
