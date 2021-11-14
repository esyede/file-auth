<?php

namespace Esyede;

defined('DS') or exit('No direct script access.');

use Arr;
use Hash;
use Config;
use Authenticator;

class FileAuth extends Authenticator
{
    public function retrieve($id)
    {
        if (false === filter_var($id, FILTER_VALIDATE_INT)) {
            return;
        }

        $users = Config::get('file-auth::users');
        $user = Arr::first($users, function ($key, $config) use ($id) {
            return $config['id'] === $id;
        });

        return is_array($user) ? (object) $user : $user;
    }

    public function attempt(array $arguments = [])
    {
        $users = Config::get('file-auth::users');
        $identifier = Config::get('auth.username');

        $user = Arr::first($users, function ($key, $config) use ($arguments, $identifier) {
            return array_key_exists($key, $config)
                && $arguments[$identifier] === $config[$identifier]
                && Hash::check($arguments['password'], Hash::make($config['password']));
        });

        return is_array($user) ? $this->login($user['id'], Arr::get($arguments, 'remember')) : false;
    }
}
