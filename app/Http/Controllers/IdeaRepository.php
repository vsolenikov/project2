<?php

namespace App\Repositories;

use App\User;
use App\Idea;
use App\Http\Controllers;

class IdeaRepository
{
    /**
     * Get all of the tasks for a given user.
     * @param  User  $user
     * @return Collection
     */
  /*  public function forUser(User $user)
    {
        return Idea::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function forAll(Idea $ideas)
    {
        return Idea::where('statuses', $statuses='На рассмотрении')
            ->orderBy('created_at', 'desc')
            ->get();
    }*/

}