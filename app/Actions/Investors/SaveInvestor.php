<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 14:34
 */

namespace App\Actions\Investors;


use App\DTOs\SaveInvestorDTO;
use App\Models\Investor;

class SaveInvestor
{
    public function __construct(private ShowInvestor $showAction)
    {
    }

    public function handle(SaveInvestorDTO $dto, ?int $investorId = null): Investor
    {
        $investor =  is_null($investorId)
            ? new Investor()
            : $this->showAction($investorId);
        $investor->fill($dto->toArray());
        $investor->save();
        return $investor;
    }
}
