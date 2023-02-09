<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 10:19
 */

namespace App\Actions\Users;


use App\DTOs\SaveUserDTO;
use App\Models\User;

class SaveUser
{
    public function __construct(private ShowUser $showAction) {}

    public function handle(SaveUserDTO $dto, ?int $userId = null): User
    {
        $user = is_null($userId)
            ? new User()
            : $this->showAction->handle($userId);
        $user->fill($dto->toArray());
        $user->save();
        return $user;
    }
}
