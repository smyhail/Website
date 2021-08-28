<?php

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Nazwa użytkownika jest wymagana');
    }

    if (empty($user['email'])) {
        array_push($errors, 'Adres Email jest wymagany');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Hasło jest wymagane');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Wprowadzane hasłą są inne');
    }

    // $existingUser = selectOne('users', ['email' => $user['email']]);
    // if ($existingUser) {
    //     array_push($errors, 'Email already exists');
    // }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Email already exists');
        }
    }

    return $errors;
}


function validateLogin($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Nazwa użytkownika jest wymagana');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Hasło jest wymaganad');
    }

    return $errors;
}