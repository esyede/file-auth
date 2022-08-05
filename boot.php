<?php

defined('DS') or exit('No direct script access.');

System\Autoloader::map([
    'Esyede\FileAuth' => __DIR__.DS.'libraries'.DS.'file-auth.php',
]);

System\Auth::extend('file', function () {
    return new Esyede\FileAuth();
});
