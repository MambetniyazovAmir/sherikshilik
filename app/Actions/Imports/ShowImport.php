<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 11:59
 */

namespace App\Actions\Imports;


use App\Models\Import;

class ShowImport
{
    public function handle(int $importId): Import
    {
        return Import::findOrFail($importId);
    }
}
