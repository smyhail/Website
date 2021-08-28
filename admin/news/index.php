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

        <title>Admin Section - Manage Posts</title>
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

                    <h2 class="page-title">Zarządzaj aktualnościami</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Data</th>
                            <th>Tytuł</th>
                         
                            <th>Autor</th>
                            <th style="text-align:center" colspan="3">Akcja</th>
                        </thead>
                        <tbody>
                            <?php foreach ($news as $key => $new): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $new['term'] ?></td>
                                    <td><?php echo $new['title'] ?></td>                                    
                                    <td><?php echo $new['author'] ?></td>
                              
                                    <td style="text-align:center">
                                        <a href="edit.php?id=<?php echo $new['id']; ?>" class="edit">edytuj</a>
                                        <a href="edit.php?delete_id=<?php echo $new['id']; ?>" class="delete">usuń</a>

                                    <?php if ($new['published']): ?>
                                       <a href="edit.php?published=0&p_id=<?php echo $new['id'] ?>" class="unpublish">anuluj</a>
                                    <?php else: ?>
                                        <a href="edit.php?published=1&p_id=<?php echo $new['id'] ?>" class="publish">zawieś</a>
                                    <?php endif; ?>
                                    
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->

        <?php 
        

            //print_r($news)
        ?>



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>

</html>