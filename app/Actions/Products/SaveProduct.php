<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;


use App\DTOs\SaveProductDTO;
use App\Models\Product;

class SaveProduct
{
    public function __construct()
    {
    }

    public function handle(SaveProductDTO $dto, ?int $productId = null): Product
    {
        $product = is_null($productId)
            ? new Product()
            : $this->showAction->handle($productId);
        $product->fill($dto->toArray());
        $product->save();
        return $product;
    }
}
