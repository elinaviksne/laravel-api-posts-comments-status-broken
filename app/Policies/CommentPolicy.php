<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Auth\Access\Response;

class CommentPolicy
{
    public function delete(User $user, Comment $comment)
    {
        return $user->id === $comment->user->id
            ? Response::allow()
            : Response::deny("You do not own this comment");
    }
}
