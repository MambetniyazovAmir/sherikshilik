<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;


use App\DTOs\SaveStockDTO;
use App\Models\Stock;

class SaveStock
{
    public function __construct(private ShowStock $showAction)
    {
    }

    public function handle(SaveStockDTO $dto, ?int $stockId = null) : Stock
    {
        $stock = is_null($stockId)
            ? new Stock()
            : $this->showAction->handle($stockId);
        $stock->fill($dto->toArray());
        $stock->save();
        return $stock;
    }
}
