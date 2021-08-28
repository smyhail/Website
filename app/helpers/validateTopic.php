<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Nazwa kategorii jest wymagana');
    }

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
        if (isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'Kategoria już istnieje');
        }

        if (isset($post['add-topic'])) {
            array_push($errors, 'Kategoria już istnieje');
        }
    }

    return $errors;
}
