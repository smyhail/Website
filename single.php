<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);


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
 

  <?php include(ROOT_PATH . "/includes/header.php");
  
  $m_en = array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

  $m_pol = array("Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień");

  ?>



  <section class="blog_area section-padding">
            <div class="container cont">
                <div class="row">
                      <div class="col-lg-9 ">
                          
                            

                                
                          <article class="blog_item" style="text-align: center; min-height: 100px">
                            <h2 style="padding-top: 25px;"> <?php echo $post['title']; ?></h2>                             
                          </article>
                              
                                

                            
                            
                         
                          <div>
                          
                          <article class="blog_item">
                                            <div class="blog_item_img">
                                                <img class="card-img rounded-0" src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" >
                                                <?php
                                                $d = substr($post['term'], 8,2) ;
                                                $dd = substr($post['term'], 5,2) ;
                                                $m = str_replace($m_en, $m_pol, $dd);
                                                ?>
                                                
                                                <a href="#" class="blog_item_date">
                                                    <h3><?php echo $d ?></h3>
                                                    <p><?php echo $m ?></p>
                                                </a>
                                            </div>
                                            <div class="col-12 single_body">


                                            <div class="col-lg-12 ">
                                              <h2><?php echo $post['title']; ?></h2>
                                            
                                            </div>
                                            <div>
                                            <p>
                                                <?php echo html_entity_decode($post['body']); ?>
                                               
                                                </p>
                                            </div>




                                            </div>
                          </article>









                        </div>
                      </div>
                      
                    <div class="col-lg-3" >
                      <div class="section topics">
                        <h2 class="section-title">Kategorie</h2>
                            <ul>
                            <li><a href="<?php echo BASE_URL . '/szkolenia.php'?>">Wszystkie kategorie</a></li>
                              <?php foreach ($topics as $topic): ?>
                                <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                              <?php endforeach; ?>

                            </ul>
                      </div>
                    </div>

                    
                </div>
                
            </div>
  </section>


  <?php include(ROOT_PATH . "/includes/footer.php"); ?>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>