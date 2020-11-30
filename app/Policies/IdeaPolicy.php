<?php

namespace App\Policies;


use App\User;
use App\Idea;
use Illuminate\Auth\Access\HandlesAuthorization;

class IdeaPolicy
{
    use HandlesAuthorization;

    /*
     * ����������, ����� �� ������ ������������ ������� ������ ������.
     *
     * @param  User  $user
     * @param  Idea  $idea
     * @return bool
     */
    public function destroy(User $user, Idea $idea)
    {
        return $user->id === $idea->user_id;
    }

    public function update($id, User $user, Idea $idea)
    {
//        return $user->user_id == $idea->id;

    }
}
