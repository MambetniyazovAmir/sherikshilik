<?php

namespace App\DTOs;

use WendellAdriel\ValidatedDTO\Casting\BooleanCast;
use WendellAdriel\ValidatedDTO\Casting\IntegerCast;
use WendellAdriel\ValidatedDTO\ValidatedDTO;

class FetchUsersDTO extends ValidatedDTO
{
    public int $page;
    public int $per_page;
    public bool $active_only;
    /**
     * Defines the validation rules for the DTO.
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            'page' => ['sometimes', 'integer'],
            'per_page' => ['sometimes', 'integer'],
            'active_only' => ['sometimes', 'boolean'],
        ];
    }

    /**
     * Defines the default values for the properties of the DTO.
     *
     * @return array
     */
    protected function defaults(): array
    {
        return [
            'page' => 1,
            'per_page' => 20,
            'active_only' => true,
        ];
    }

    /**
     * Defines the type casting for the properties of the DTO.
     *
     * @return array
     */
    protected function casts(): array
    {
        return [
            'page' => new IntegerCast(),
            'per_page' => new IntegerCast(),
            'active_only' => new BooleanCast(),
        ];
    }

    /**
     * Defines the custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [];
    }

    /**
     * Defines the custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [];
    }
}
