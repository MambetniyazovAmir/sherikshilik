<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;

use App\DTOs\FetchProductsDTO;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class FetchProducts
{
    public function handle(FetchProductsDTO $dto): Collection
    {
        $query = Product::query();
        return $query->skip(($dto->page - 1) * $dto->per_page)->take($dto->per_page)->get();
    }
}
