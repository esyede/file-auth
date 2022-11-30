<?php

namespace Esyede;

defined('DS') or exit('No direct script access.');

use System\Arr;
use System\Hash;
use System\Config;
use System\Auth\Drivers\Driver;

class FileAuth extends Driver
{
    public function retrieve($id)
    {
        if (false === filter_var($id, FILTER_VALIDATE_INT)) {
            return;
        }

        $users = Config::get('file-auth::users');
        $user = Arr::first($users, function ($key, $config) use ($id) {
            return (int) $config['id'] === $id;
        });

        return is_array($user) ? (object) $user : $user;
    }

    public function attempt(array $arguments = [])
    {
        $users = Config::get('file-auth::users');
        $user = Arr::first($users, function ($key, $config) use ($arguments) {
            return isset($arguments['email'])
                && $arguments['email'] === $config['email']
                && isset($arguments['password'])
                && Hash::check($arguments['password'], Hash::make($config['password']));
        });

        return is_array($user) ? $this->login($user['id'], Arr::get($arguments, 'remember')) : false;
    }
}
