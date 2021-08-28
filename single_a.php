<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/news.php');

if (isset($_GET['id'])) {
  $new = selectOne('news', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$news = selectAll('news', ['published' => 1]);


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
                      <div class="col-lg-12 ">
                          
                          <div>
                          
                          <article class="blog_item">
                                    <div class="blog_item_img">
                                                      
                                                        <?php
                                                        $d = substr($new['term'], 8,2) ;
                                                        $dd = substr($new['term'], 5,2) ;
                                                        $m = str_replace($m_en, $m_pol, $dd);
                                                        ?>
                                                        
                                                        <a href="#" class="blog_item_date">
                                                            <h3><?php echo $d ?></h3>
                                                            <p><?php echo $m ?></p>
                                                        </a>
                                    </div>
                            
                                            <div class="col-12 single_body">


                                            <div class="col-lg-12 ">
                                            <?php echo $new['title']; ?>
                                            </div>
                                            <div>
                                            <p>
                                                <?php echo html_entity_decode($new['body']); ?>
                                               
                                                </p>
                                            </div>


                                            <div class="col-12">

                                            <br><br><br>
                                            <h3>Dodaj komentarz</h3>
                                            <br><br>


                                            <!---    -->

                                            <form action="single_a.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <div>
                            
                            <input type="hidden" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>

                        
                        <div>
                          
                            <input type="hidden" id="term" name="term" value="<?php echo strftime('%Y-%m-%d',
  strtotime($term)); ?>" >
                        </div>
                        <div>
                            <label>Body</label>
                            <textarea name="body" id="body"><?php echo $body ?></textarea>
                        </div>
                       
                       
                        <div>
                       
                        </div>
                        
                        
                        <div>
                            <?php if (empty($published) && $published == 0): ?>
                                <label>
                                    <input type="checkbox" name="published">
                                    Publish
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Publish
                                </label>
                            <?php endif; ?>
                           

                        </div>
                        <div>
                            <button type="submit" name="update-news-2" class="btn btn-big">Update Post</button>
                        </div>
                    </form>












                                            <!---    -->
                        \asc





                                            </div>





                            </div>



                          </article>









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
 <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>
 
 
</body>

</html>