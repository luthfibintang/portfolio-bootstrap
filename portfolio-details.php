<?php 
include './connection.php';

// Get project ID from the URL
$projectId = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Query to retrieve project details based on the ID
$projectQuery = "SELECT * FROM `portfolio` WHERE `id` = $projectId";
$projectRes = $conn->query($projectQuery);
$project = $projectRes->fetch_assoc();

// query to retrieve social links
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
    <title>Portfolio - Azisya Luthfi Bintang</title>
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
  <body class="portfolio-details-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center justify-content-center"
      >
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="resume.php">Resume</a></li>
            <!-- <li><a href="services.html">Services</a></li> -->
            <li><a href="portfolio.php" class="active">Portfolio</a></li>
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
                <h1>Portfolio Details - <?php echo htmlspecialchars($project['project_name']); ?></h1>
                <p class="mb-0">
                  More Details About the <?php echo htmlspecialchars($project['project_name']); ?> Project
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Portfolio Details Section -->
      <section id="portfolio-details" class="portfolio-details section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    }
                  }
                </script>

                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="<?php echo htmlspecialchars($project['image_url']); ?>" alt="" />
                  </div>

                  <!-- <div class="swiper-slide">
                    <img src="assets/img/portfolio/product-1.jpg" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/branding-1.jpg" alt="" />
                  </div>

                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/books-1.jpg" alt="" />
                  </div> -->
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>

            <div class="col-lg-4">
              <div
                class="portfolio-info"
                data-aos="fade-up"
                data-aos-delay="200"
              >
                <h3>Project information</h3>
                <ul>
                  <li><strong>Category</strong>: <?php echo htmlspecialchars($project['category']); ?></li>
                  <li><strong>Project date: </strong><?php echo htmlspecialchars($project['project_date']); ?></li>
                  <li>
                    <strong>Project URL</strong>:
                    <?php if (!empty($project['project_url'])): ?>
                      <a href="<?php echo htmlspecialchars($project['project_url']); ?>" target="_blank">Click Here</a>
                    <?php else: ?>
                      link for this project is not available
                    <?php endif; ?>
                  </li>
                </ul>
              </div>
              <div
                class="portfolio-description"
                data-aos="fade-up"
                data-aos-delay="300"
              >
                <h2><?php echo htmlspecialchars($project['project_name']); ?> - <?php echo htmlspecialchars($project['motto']); ?></h2>
                <p>
                <?php echo ($project['full_description']); ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Portfolio Details Section -->
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
  </body>
</html>
