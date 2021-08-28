<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateNews.php");

$table = 'news';


$news = selectAll($table);


$errors = array();
$id = "";
$title = "";
$term = "";
$body = "";
$published = "";
$author = "";
$create_at = "";

if (isset($_GET['id'])) {
    $new = selectOne($table, ['id' => $_GET['id']]);


    $id = $new['id'];
    $title = $new['title'];
    $term = $new['term'];
    $body = $new['body'];
    $published = $new['published'];
    $author = $new['author'];
    $create_at = $new['create_at'];

}


//add only admin
if (isset($_POST['add-news'])) {
    adminOnly();
    $errors = validateNews($_POST);

    if (count($errors) == 0) {
        unset($_POST['add-news']);
        
     
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['author'] = $_SESSION['username'];

        
       
    
        $news_id = create($table, $_POST);
        $_SESSION['message'] = "News został dodany";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/news/index.php"); 
        exit();    
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];        
        $published = isset($_POST['published']) ? 1 : 0;
    }
}






//add only admin
if (isset($_GET['delete_id'])) {
    adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "News został dodany";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/news/index.php"); 
    exit();
}

//add only admin
if (isset($_GET['published']) && isset($_GET['n_id'])) {
    usersOnly();

    $published = $_GET['published'];
    $n_id = $_GET['n_id'];
    $count = update($table, $n_id, ['published' => $published]);
    $_SESSION['message'] = "News został zmodyfikowany!";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/news/index.php"); 
    exit();
}



//update admin 
if (isset($_POST['update-news'])) {
    adminOnly();
    $errors == 0 ;// validatenews($_POST);

    

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-news'], $_POST['id']);       
        
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
    
        $news_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Aktualność został zmieniona";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/news/index.php");       
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
       
        $published = isset($_POST['published']) ? 1 : 0;
    }

}

//update om front page
if (isset($_POST['update-news-2'])) {
    adminOnly();
    $errors == 0 ;// validatenews($_POST);

    

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-news-2'], $_POST['id']);       
        
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']) . "Aktualizacja: " . $_SESSION['username'] . " - " . date('Y-m-d H:i:s', time());
    
        $news_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Aktualność został zaktualizowany";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/aktual.php");       
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
       
        $published = isset($_POST['published']) ? 1 : 0;
    }

}
