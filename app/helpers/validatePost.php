<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Tytuł jest wymagany');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Treść jest wymagana');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Proszę wybierz kategorię');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post z tym tytułem już istnieje');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Post z tym tytułem już istnieje');
        }
    }

    return $errors;
}