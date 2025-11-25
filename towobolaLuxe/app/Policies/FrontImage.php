<?php

namespace App\Policies;

use App\Models\User;

class FrontImage
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function canCreate(){
        return false;
    }
}
