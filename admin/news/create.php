<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/news.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
       

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../assets/css/b-style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">

        <title>Admin Section - Dodawanie aktualności</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Dodaj aktualność</a>
                    <a href="index.php" class="btn btn-big">Zarządzaj aktualnościami</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Dodaj aktualność</h2>

                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div>
                            <label>Tytuł</label>
                            <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>

                        <div>
                            <label>Data wydarzenia</label> <br>
                            <input type="date" id="term" name="term">
                        </div>
                        <div>
                            <label>Treść</label>
                            <textarea name="body" id="body"><?php echo $body ?></textarea>
                        </div>
                       
                        
                        
                        <div>
                            <?php if (empty($published)): ?>
                                <label>
                                    <input type="checkbox" name="published">
                                    Publikuj od razu na stronie
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Publikuj od razu na stronie
                                </label>
                            <?php endif; ?>                          

                        </div>
                        <div>
                            <button type="submit" name="add-news" class="btn btn-big">Dodaj aktualność</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js">
        </script>
        <!-- Custom Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>

</html>