<?php

namespace App\Traits;

use App\Repositories\UserRepository;

/**
 * 
 */
trait UserTrait
{
    public function getListUser()
    {
        $repo = new UserRepository();
        return $repo->listUser();
    }


}