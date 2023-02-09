<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 10:19
 */

namespace App\Actions\Users;


class DeleteUser
{

    public function __construct(private ShowUser $showAction){}

    public function handle(?int $userId = null): void
    {
        $user = $this->showAction->handle($userId);
        $user->delete();
    }
}
