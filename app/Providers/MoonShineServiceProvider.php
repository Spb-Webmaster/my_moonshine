<?php

namespace App\Providers;

use App\MoonShine\Resources\ArticleResource;
use App\MoonShine\Resources\CategoryResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\CustomPage;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Tests\Fixtures\Models\Category;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),
            MenuGroup::make('Материалы', [

                MenuItem::make('Категории', new CategoryResource())->icon('heroicons.academic-cap'),

                MenuItem::make('Статьи', new ArticleResource())->icon('heroicons.academic-cap')
            ])->icon('heroicons.outline.academic-cap'),
            MenuItem::make('Кастомная страница',
                CustomPage::make('Кастомная страница',
                    'custom',
                    'pages.custom',
                    static function () {




                        $item = DB::table('articles')
                            ->where('active', 1)
                            ->inRandomOrder()
                            ->first();



                        return [
                            'item' => $item,

                           // 'items' => Http::get('https://dummyjson.com/products')->json('products')
                           // axeld_test()

                        ];

                    }


                )


            ),


            /*       MenuItem::make('Documentation', 'https://laravel.com')
                       ->badge(fn() => 'Check'),*/
        ]);
    }
}
