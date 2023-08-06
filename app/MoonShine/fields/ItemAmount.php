<?php

namespace App\MoonShine\Fields;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Field;

class ItemAmount extends Field
{
    protected static string $view = 'moonshine.fields.item-amount';

    protected bool $group = true;

public function formViewValue(Model $item): mixed
{
    return [
        'amount' => $item->id,
        'qty' => 1,
    ];
}
}

