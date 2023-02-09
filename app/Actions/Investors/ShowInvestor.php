<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;


use App\Models\Investor;

class ShowInvestor
{
    public function handle(int $investorId): Investor
    {
        return Investor::findOrFail($investorId);
    }
}
