<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;


use App\DTOs\FetchInvestorsDTO;
use App\Models\Investor;
use Illuminate\Database\Eloquent\Collection;

class FetchInvestors
{
    public function handle(FetchInvestorsDTO $dto) : Collection
    {
        $query = Investor::query();
        return $query->skip(($dto->page - 1) * $dto->per_page)->take($dto->per_page)->get();
    }
}
