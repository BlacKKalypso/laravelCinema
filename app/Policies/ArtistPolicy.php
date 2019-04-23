<?php

namespace App\Policies;

use App\Models\{Artist, User};
use Illuminate\Auth\Access\HandlesAuthorization;

class ArtistPolicy
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

    public function update(User $user, Artist $artist){
        return $user->id === $artist->user_id;
    }
}
