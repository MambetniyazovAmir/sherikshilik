<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:33
 */

namespace App\Actions\Investors;


class DeleteInvestor
{
    public function __construct(private ShowInvestor $showAction)
    {
    }

    public function handle(?int $investorId) : void
    {
        $investor = $this->showAction->handle($investorId);
        $investor->delete();
    }
}
