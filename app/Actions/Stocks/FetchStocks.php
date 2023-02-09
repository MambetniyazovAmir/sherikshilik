<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;


use App\DTOs\FetchStocksDTO;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Collection;

class FetchStocks
{
    public function handle(FetchStocksDTO $dto): Collection
    {
        $query = Stock::query();
        return $query->skip(($dto->page - 1 )* $dto->per_page)->take($dto->per_page)->get();
    }
}
