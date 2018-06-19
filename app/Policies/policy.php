<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class policy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function before($user,$ability){
        if ($user->can('manage_contents')){
            return true;
        }
    }
}
