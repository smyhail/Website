<?php

if (isset($_FILES['image'])) {
    $image = $_FILES['image']['name'];
    $target = "images/" . basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        //echo 'http://localhost/_TEST/CKEditor/2/ckeditor-image-upload/' . $target;
        echo ROOT_PATH . $target;
            exit();
    } else{
        echo 'Nie udało sie dodać obrazu';
        exit();
    }
}
