<?php 
include './connection.php';
// Query to fetch data from the 'about' table and limit only 1 data to make sure there is not duplicate
$sql = "SELECT * FROM about LIMIT 1";
$result = $conn->query($sql);

// Initialize variables to store fetched data
$name = $bio = $education = "";
$skills = [];
$github = $instagram = $linkedin = "";

// Fetch data if available
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $description = $row['description'];
    $skills = explode(",", $row['technologies']); // Assumes skills are stored as a comma-separated list
} else {
    echo "No data found!";
}

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
    <title>About - Azisya Luthfi Bintang</title>
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

  <body class="about-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center justify-content-center"
      >
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php" class="active">About</a></li>
            <li><a href="resume.php">Resume</a></li>
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
                <h1>About Me</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- About Section -->
      <section id="about" class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-8 content">
              <p class="pt-3">
                Hello! My name is
                <span class="highlight-text"><?php echo htmlspecialchars($name); ?></span>, 
                <?php echo($description); ?>
              </p>
              <p>Here are a few technologies i've been working recently:</p>
              <div class="row">
                <?php
                  // Divide skills into two columns
                  $half = ceil(count($skills) / 2);
                  $leftSkills = array_slice($skills, 0, $half);
                  $rightSkills = array_slice($skills, $half);
                ?>
                <div class="col-lg-6">
                  <ul>
                    <?php foreach ($leftSkills as $skill) : ?>
                      <li><i class="bi bi-dot"></i><?php echo htmlspecialchars($skill); ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <?php foreach ($rightSkills as $skill) : ?>
                      <li><i class="bi bi-dot"></i><?php echo htmlspecialchars($skill); ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /About Section -->
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
