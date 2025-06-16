<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class FrontEndPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function detail(User $user){
        return ($user->role == "Customer") ?
        Response::allow() :
        Response::deny("Only users are allowed to perform this operation");
    }
}
