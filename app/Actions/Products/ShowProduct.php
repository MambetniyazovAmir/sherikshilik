<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;

use App\Models\Product;

class ShowProduct
{
    public function handle(int $productId): Product
    {
        return Product::findOrFail($productId);
    }
}
