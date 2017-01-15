<?php
/**
 * Created by PhpStorm.
 * User: fujiiyousuke
 * Date: 2017/01/14
 * Time: 23:07
 */

namespace App\Repositories;

use App\User;
use App\Task;


class TaskRepository
{
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}