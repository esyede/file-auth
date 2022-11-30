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
        'name' => 'Administrator',
        'email' => 'admin@gmail.com',
        'password' => 'password',
    ],
    [
        'id' => 2,
        'name' => 'Sample User',
        'email' => 'user@gmail.com',
        'password' => 'password',
    ],
];
