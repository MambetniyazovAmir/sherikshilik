<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 10:18
 */

namespace App\Actions\Users;


use App\Models\User;

class ShowUser
{
    /**
     * @param int $userId
     * @return User
     */
    public function handle(int $userId): User
    {
        return User::findOrFail($userId);
    }
}
