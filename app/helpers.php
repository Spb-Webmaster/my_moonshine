<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


if (!function_exists('active_link')) {
    function active_link(string $name, string $active = 'active'): string
    {
        return Route::is($name) ? $active : '';
    }
}

/*if (!function_exists('axeld_test')) {
    function axeld_test(): string
    {
        return ArticleController::class->index();
    }
}*/

