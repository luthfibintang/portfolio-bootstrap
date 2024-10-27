<?php 
include './connection.php';

// Query to fetch data from the 'about' table and limit only 1 data to make sure there is not duplicate
$sql = "SELECT * FROM home LIMIT 1";
$result = $conn->query($sql);

// Check if data is available
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $title = $row['title'];
    $email = $row['email'];
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
    <title>Index - Personal Bootstrap Template</title>
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

  <body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
      <div
        class="container-fluid container-xl position-relative d-flex align-items-center justify-content-center"
      >
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
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
      <!-- Hero Section -->
      <section id="hero" class="hero section">
        <div
          class="container d-flex flex-column align-items-center"
          data-aos="zoom-out"
          data-aos-delay="100"
        >
          <div>
            <small class="lead">Hi, My name is</small>
            <h2><?php echo htmlspecialchars($name); ?></h2>
            <p>
              I'm
              <span
                class="typed"
                data-typed-items="<?php echo htmlspecialchars($title); ?>"
              ></span
              ><span class="typed-cursor typed-cursor--blink"></span>
            </p>
            <div class="social-links">
              <a target="_blank" href="<?= $socialLinks['github'] ?>"><i class="bi bi-github"></i></a>
              <a target="_blank" href="<?= $socialLinks['instagram'] ?>"><i class="bi bi-instagram"></i></a>
              <a target="_blank" href="<?= $socialLinks['linkedin'] ?>"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div
          class="vertical-text d-flex justify-content-end p-3"
          style="height: 77vh"
        >
          <small><?php echo htmlspecialchars($email); ?></small>
        </div>
      </section>
      <!-- /Hero Section -->
    </main>

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
