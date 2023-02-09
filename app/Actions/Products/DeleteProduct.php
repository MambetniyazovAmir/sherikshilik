<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:33
 */

namespace App\Actions\Investors;

class DeleteProduct
{
    public function __construct(private ShowProduct $showAction)
    {
    }

    public function handle(?int $productId = null) : void
    {
        $product = $this->showAction->handle($productId);
        $product->delete();
    }
}
