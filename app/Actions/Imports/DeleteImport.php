<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 11:58
 */

namespace App\Actions\Imports;


class DeleteImport
{
    public function __construct(private ShowImport $showAction)
    {
    }

    public function handle(?int $importId) : void
    {
        $import = $this->showAction->handle($importId);
        $import->delete();
    }
}
