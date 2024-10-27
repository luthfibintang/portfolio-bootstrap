<?php 
include './connection.php';

// Query to fetch data from the 'about' table and limit only 1 data to make sure there is not duplicate
$sql = "SELECT * FROM contact LIMIT 1";
$result = $conn->query($sql);

// Check if data is available
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $github = $row['github_link'];
    $instagram = $row['instagram_link'];
    $linkedin = $row['linkedin_link'];
} else {
    echo "No data found!";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Contact - Azisya Luthfi Bintang</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon" />
    <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> -->

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

  <body class="contact-page">
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
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="contact.php" class="active">Contact</a></li>
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
                <h1>Contact</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Contact Section -->
      <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-md-6">
              <div
                class="info-item d-flex align-items-center"
                data-aos="fade-up"
                data-aos-delay="400"
              >
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Me</h3>
                  <p><?php echo htmlspecialchars($email); ?></p>
                </div>
              </div>
            </div>
            <!-- End Info Item -->

            <div class="col-md-6">
              <div
                class="info-item d-flex align-items-center"
                data-aos="fade-up"
                data-aos-delay="500"
              >
                <i class="icon bi bi-share flex-shrink-0"></i>
                <div>
                  <h3>Social Profiles</h3>
                  <div class="social-links">
                    <a target="_blank" href="<?php echo htmlspecialchars($github); ?>"
                      ><i class="bi bi-github"></i
                    ></a>
                    <a
                      target="_blank"
                      href="<?php echo htmlspecialchars($instagram); ?>"
                      ><i class="bi bi-instagram"></i
                    ></a>
                    <a
                      target="_blank"
                      href="<?php echo htmlspecialchars($linkedin); ?>"
                      ><i class="bi bi-linkedin"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Info Item -->
          </div>

          <form
            method="POST"
            class="php-email-form"
            data-aos="fade-up"
            data-aos-delay="600"
            id="form"
          >
            <input type="hidden" name="access_key" value="f27bde19-8df6-4e99-a462-b4ec24ccb2c7">
            <div class="row gy-4">
              <div class="col-md-6">
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  placeholder="Your Name"
                  required=""
                  id="name"
                />
              </div>

              <div class="col-md-6">
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  placeholder="Your Email"
                  required=""
                  id="email"
                />
              </div>

              <div class="col-md-12">
                <textarea
                  class="form-control"
                  name="message"
                  rows="6"
                  placeholder="Message"
                  required=""
                  id="message"
                ></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div id="result" class="sent-status"></div>

                <button type="submit">Send Message</button>
              </div>
            </div>
          </form>
          <!-- End Contact Form -->
        </div>
      </section>
      <!-- /Contact Section -->
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
    <script>
      const form = document.getElementById('form');
      const result = document.getElementById('result');

      form.addEventListener('submit', function(e) {
          e.preventDefault();  // Prevent form from reloading the page

          const formData = new FormData(form);
          const object = Object.fromEntries(formData);
          const json = JSON.stringify(object);

          result.style.display = "block";  // Ensure the result is visible
          result.innerHTML = "Please wait...";

          fetch('https://api.web3forms.com/submit', {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json',
                      'Accept': 'application/json'
                  },
                  body: json
              })
              .then(async (response) => {
                  let json = await response.json();
                  if (response.status === 200) {
                      result.innerHTML = json.message;
                  } else {
                      console.log(response);
                      result.innerHTML = json.message;
                  }
              })
              .catch(error => {
                  console.log(error);
                  result.innerHTML = "Something went wrong!";
              })
              .then(function() {
                  form.reset();  // Clear the form after submission
                  setTimeout(() => {
                      result.innerHTML = "";  // Clear result text but keep display visible
                      result.style.display = "none";
                  }, 3000);
              });
      });
    </script>

  </body>
</html>
