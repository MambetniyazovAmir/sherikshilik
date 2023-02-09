<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 10:18
 */

namespace App\Actions\Users;


use App\DTOs\FetchUsersDTO;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class FetchUsers
{
    public function handle(FetchUsersDTO $dto): Collection
    {
        $query = User::query();
        return $query->skip(($dto->page - 1) * $dto->per_page)->take($dto->per_page)->get();
    }
}
