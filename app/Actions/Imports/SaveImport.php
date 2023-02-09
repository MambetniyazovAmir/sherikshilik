<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 11:57
 */

namespace App\Actions\Imports;


use App\DTOs\SaveImportDTO;
use App\Models\Import;

class SaveImport
{
    public function __construct(private ShowImport $showAction){}

    public function handle(SaveImportDTO $dto, ?int $importId = null): Import
    {
        $import = is_null($importId)
            ? new Import()
            : $this->showAction->handle($importId);
        $import->fill($dto->toArray());
        $import->save();
        return $import;
    }
}
