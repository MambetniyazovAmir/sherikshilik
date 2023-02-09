<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;


use App\Models\Stock;

class ShowStock
{
    public function handle(int $stockId): Stock
    {
        return Stock::findOrFail($stockId);
    }
}
