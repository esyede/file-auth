<?php

defined('DS') or exit('No direct script access.');

/*
|--------------------------------------------------------------------------
| Daftar akun
|--------------------------------------------------------------------------
|
| Ini adalah daftar akun yang dapat anda gunakan untuk keperluan login.
| Anda HARUS mengubah data ini agar informasi sensitif seperti password,
| username dll tidak diketahui oleh orang lain.
|
*/

return [
    [
        'id' => 1,
        'email' => 'admin@gmail.com',
        'username' => 'admin',
        'password' => 'rahasia',
    ],
    [
        'id' => 2,
        'email' => 'user@gmail.com',
        'username' => 'user',
        'password' => 'rahasia',
    ],
];
