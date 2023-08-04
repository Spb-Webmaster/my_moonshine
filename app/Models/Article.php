<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use MoonShine\Models\MoonshineUser;
use MoonShine\Traits\Models\HasMoonShineChangeLog;

class Article extends Model
{
    use HasFactory;
    use HasMoonShineChangeLog;

    protected $fillable = [
        'title',
        'category',
        'client',
        'projectdate',
        'projecturl',
        'description',
        'img',
        'active',
        'data',
        'gallery',
    ];
    protected $casts = [
        'data' => 'collection',
        'gallery' => 'collection'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }


    public function author(): BelongsTo
    {
        return $this->belongsTo(MoonshineUser::class);
    }



}
