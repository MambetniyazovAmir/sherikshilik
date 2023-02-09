<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 09.02.2023
 * Time: 11:59
 */

namespace App\Actions\Imports;


use App\DTOs\FetchImportsDTO;
use App\Models\Import;
use Illuminate\Database\Eloquent\Collection;

class FetchImports
{
    public function handle(FetchImportsDTO $dto) : Collection
    {
        $query = Import::query();
        return $query->skip(($dto->page - 1) * $dto->per_page)->take($dto->per_page)->get();
    }
}
