<?php 
include './connection.php';

// Fetch portfolio items from the database
$sql = "SELECT * FROM portfolio"; // Update this with your actual table name
$result = $conn->query($sql);

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

  <body class="portfolio-page">
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
                <h1>Portfolio</h1>
                <p class="mb-0">
                  Feel free to take a look at my projects to see what I’ve been
                  working on and explore some recent work.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Portfolio Section -->
      <section id="portfolio" class="portfolio section">
        <div class="container">
          <div
            class="isotope-layout"
            data-default-filter="*"
            data-layout="masonry"
            data-sort="original-order"
          >
            <ul
              class="portfolio-filters isotope-filters"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <!-- <li data-filter=".filter-product">Product</li> -->
              <li data-filter=".filter-design">UI/UX Design</li>
              <!-- <li data-filter=".filter-books">Books</li> -->
            </ul>
            <!-- End Portfolio Filters -->

            <div
              class="row gy-4 isotope-container"
              data-aos="fade-up"
              data-aos-delay="200"
            >
            <?php
            // Loop through each portfolio item
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                // Set up filter class based on type
                $filterClass = strtolower($row['category']); 
                ?>
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo $filterClass; ?>">
                  <div class="portfolio-content h-100">
                    <img src="<?php echo $row['image_url']; ?>" class="img-fluid" alt="<?php echo $row['project_name']; ?> Image" />
                    <div class="portfolio-info">
                      <h4><?php echo $row['project_name']; ?></h4>
                      <p><?php echo $row['description']; ?></p>
                      <a href="<?php echo $row['image_url']; ?>" title="<?php echo $row['project_name']; ?>" data-gallery="portfolio-gallery-<?php echo $filterClass; ?>" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="portfolio-details.php?id=<?php echo $row['id']; ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div>
                <?php
              }
            } else {
              echo "<p>No portfolio items found.</p>";
            }
            ?>
            </div>
            <!-- End Portfolio Container -->
          </div>
        </div>
      </section>
      <!-- /Portfolio Section -->
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
