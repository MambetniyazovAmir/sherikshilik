<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:33
 */

namespace App\Actions\Investors;


class DeleteStock
{
    public function __construct(private ShowStock $showAction)
    {
    }

    public function handle(?int $stockId): void
    {
        $stock = $this->showAction->handle($stockId);
        $stock->delete();
    }
}
