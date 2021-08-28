<?php


function validateNews($news)
{
    $errors = array();

    if (empty($news['title'])) {
        array_push($errors, 'Tytuł jet wymagany');
    }
    if (empty($news['term'])) {
        array_push($errors, 'Termin jest wymagany');
    }

    if (empty($news['body'])) {
        array_push($errors, 'Treść jest wymagana');
    }
    

    $existingnews = selectOne('news', ['title' => $news['title']]);
    if ($existingnews) {
        if (isset($news['update-news']) && $existingnews['id'] != $news['id']) {
            array_push($errors, 'Ta aktualność z tym tytułem już istnieje' );
        }

        if (isset($news['add-news'])) {
            array_push($errors, 'Ta aktualność z tym tytułem już istnieje');
        }
    }

    return $errors;
}