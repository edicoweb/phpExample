<?php

class Auth {
    public static function tryLogin($email, $password){
        $user = User::findBy(['email' => $email]);
        dd(password_verify($password, $user[0]->password));
    }
}