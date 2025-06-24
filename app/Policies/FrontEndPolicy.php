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

    public function customer(User $user){
        return ($user->role == "Customer") ?
        Response::allow() :
        Response::deny("Only users are allowed to perform this operation");
    }

    public function backend(User $user){
        return ($user->role != "Customer") ?
        Response::allow() :
        Response::deny("Only employees and managers are allowed to perform this operation");
    }

    public function manager(User $user){
        return ($user->role != "Customer" && $user->role != "Employee") ?
        Response::allow() :
        Response::deny("Only managers are allowed to perform this operation");
    }
}
