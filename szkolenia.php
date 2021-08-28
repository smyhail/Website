<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

//$posts = array();
//$postsTitle = 'Recent Posts';

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
  <link href="/assets/vendor/fontawesome-all.min.css" rel="stylesheet">
 


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">
  <link href="assets/css/szkolenia.css" rel="stylesheet">

</head>

<body>
  <!-- <strong>Telefon:</strong> +48 42 637 77 24<br>
              <strong>Email:  </strong><a href="mailto:ztk@ztkig.pl">ztk@ztkig.pl</a> <br>-->
  <!-- ======= Top Bar ======= -->
  <main id="main">
            <span class="iconify" data-icon="bx:bxs-briefcase-alt-2" data-inline="false"></span>

        <?php 
            require("./includes/header.php");

            $m_en = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

            $m_pol = array("Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");
        ?>

        <div class="slider-area">
            <div class="slider-bg3  d-flex align-items-center"  >
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-xl-12">

                                <img src="./assets//img/szkolenia.png" class="img-fluid" alt="Szkolenia ZTKIG">

                            <div class="hero-caption hero-caption2 text-center">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="blog_area section-padding" >
            <div class="container cont">
                <div class="row rrr">
                    <div class="col-lg-9 ">
                        <div class="blog_left_sidebar">

                            <?php foreach ($posts as $post): ?>
                                    <article class="blog_item" >
                                            <div class="blog_item_img">
                                                <img class="card-img rounded-0" src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" >
                                                
                                                <?php
                                                $d = substr($post['term'], 8,2) ;
                                                $dd = substr($post['term'], 5,2) ;
                                                $m = str_replace($m_en, $m_pol, $dd);
                                                ?>
                                                
                                                <a href="single.php?id=<?php echo $post['id']; ?>" class="blog_item_date">
                                                    <h3><?php echo $d ?></h3>
                                                    <p><?php echo $m ?></p>
                                                </a>
                                            </div>
                                            <div class="blog_details">
                                                <a class="d-inline-block" href="blog_details.html">
                                                    <h2 class="blog-head" style="color: #2d2d2d;">
                                                    <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
                                                    </h2>
                                                </a>
                                                <p>
                                                <?php echo html_entity_decode(substr($post['body'], 0, 250) . '...'); ?>
                                               
                                                </p>
                                                <ul class="blog-info-link">
                                                    <li><a href="#"><i class="fas fa-tags"></i><?php echo $post['created_at'] ?></a></li>
                                                    <li><a href="#"><i class="fas fa-user-plus"></i><?php echo $post['user_name'] ?></a></li>
                                                    
                                                </ul>
                                            </div>
                                    </article>
                            <?php endforeach; ?>

                        </div>

                        



                    </div> 
                    
                    <div class="col-lg-3 blog_item">
                      

                        <div class="search" id="search" name="search">
                                <h2 class="section-title">Wyszukaj</h2>
                                <form action="szkolenia.php" method="post">
                                    <input type="text" name="search-term" class="text-input" placeholder="Wprowadz frazę...">
                                </form>
                        </div>


                                <div class="section topics" >
                                <h2 class="section-title">Kategorie</h2>
                                <ul>
                                    
                                    <li><a href="<?php echo BASE_URL . '/szkolenia.php'?>">Wszystkie kategorie</a></li>
                                    
                                    <?php foreach ($topics as $key => $topic): ?>

                                    <li><a href="<?php echo BASE_URL . '/szkolenia.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                                </div>



                        
                        
                    </div>
                   

                    

                </div>
            </div>
        </section>    




      

       

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <?php 

     require("./includes/footer.php")
 ?>

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


  <script src="https://kit.fontawesome.com/f47390a040.js" crossorigin="anonymous"></script>

</body>

</html>