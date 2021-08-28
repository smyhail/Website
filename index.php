<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Związek Telewizji Kablowych</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">
  <link href="assets/css/cookieAlert.css" rel="stylesheet">

</head>

<body>
  <!-- <strong>Telefon:</strong> +48 42 637 77 24<br>
              <strong>Email:  </strong><a href="mailto:ztk@ztkig.pl">ztk@ztkig.pl</a> <br>-->
  <!-- ======= Top Bar ======= -->
  <main id="main">
            <span class="iconify" data-icon="bx:bxs-briefcase-alt-2" data-inline="false"></span>

        <?php 
            require("./includes/header.php")
        ?>

        <?php 
            require("./includes/topBanner.php")
        ?>
        <?php 
            require("./includes/about.php")
        ?>
 <?php 
            require("./includes/counts.php")
        ?>
        
 <?php 
            require("./includes/contact.php")
        ?>


       

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php 

     require("./includes/footer.php")
 ?>

<!-- START Bootstrap-Cookie-Alert -->
<div class="alert text-center cookiealert" role="alert">
    <b>
      Strona korzysta z plików cookies w celu realizacji usług i zgodnie z  <a href="https://cookiesandyou.com/" target="_blank">Polityką Plików Cookies.</a> Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce. 

    <button type="button" class="btn btn-primary btn-sm acceptcookies">
        Akcetuj Cookies
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->

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
    <!-- Cookie code 
  <script src="assets/js/cookieAlert.js"></script>
-->
</body>

</html>