<?php

namespace App\Repositories;

use App\User;

class UserRepository
{

    public function listUser()
    {
        return User::select(['id', 'name', 'type'])->get();
    }
}
