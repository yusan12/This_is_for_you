<?php

namespace App\Policies;

use App\User;
use App\Postcard;
use Illuminate\Auth\Access\HandlesAuthorization;
class PostcardPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any postcards.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the postcard.
     *
     * @param  \App\User  $user
     * @param  \App\Postcard  $postcard
     * @return mixed
     */
    public function show(User $user, Postcard $postcard)
    {
        return $user->id === $postcard->user_id;
    }

    /**
     * Determine whether the user can create postcards.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the postcard.
     *
     * @param  \App\User  $user
     * @param  \App\Postcard  $postcard
     * @return mixed
     */
    public function update(User $user, Postcard $postcard)
    {
        return $user->id === $postcard->user_id;
    }

    /**
     * Determine whether the user can delete the postcard.
     *
     * @param  \App\User  $user
     * @param  \App\Postcard  $postcard
     * @return mixed
     */
    public function delete(User $user, Postcard $postcard)
    {
        return $user->id === $postcard->user_id;
    }

    /**
     * Determine whether the user can restore the postcard.
     *
     * @param  \App\User  $user
     * @param  \App\Postcard  $postcard
     * @return mixed
     */
    public function restore(User $user, Postcard $postcard)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the postcard.
     *
     * @param  \App\User  $user
     * @param  \App\Postcard  $postcard
     * @return mixed
     */
    public function forceDelete(User $user, Postcard $postcard)
    {
        //
    }
    public function edit(User $user, Postcard $postcard)
    {
        return $user->id === $postcard->user_id;
    }
}
