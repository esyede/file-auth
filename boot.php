<?php

defined('DS') or exit('No direct script access.');

Autoloader::map([
    'Esyede\FileAuth' => __DIR__.DS.'libraries'.DS.'file-auth.php',
]);

Auth::extend('file', function () {
    return new Esyede\FileAuth();
});
