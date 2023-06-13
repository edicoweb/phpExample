<?php

$users = User::findBy([
    'email' => 'edilberto@admin.com',
]);
dd(password_verify("admin",$users[0]->password));

dd($users);

echo "Sobre mi";