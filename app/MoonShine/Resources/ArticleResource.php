<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

use MoonShine\Decorations\Block;
use MoonShine\Decorations\Column;
use MoonShine\Decorations\Grid;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\BelongsToMany;
use MoonShine\Fields\Date;
use MoonShine\Fields\Email;
use MoonShine\Fields\Image;
use MoonShine\Fields\Json;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ArticleResource extends Resource
{
    public static string $model = Article::class;

    public static string $title = 'Статьи';

    public static string $subTitle = 'Подзаголовок Статьи';

    //  public static array $activeActions = ['create'];

    public string $titleField = 'title';

    public static int $itemsPerPage = 30;

    /*
      protected bool $editInModal =  true; // модальные окна
      protected bool $createInModal =  true; // модальные окна

      */
    /*
        public function query(): \Illuminate\Contracts\Database\Eloquent\Builder
        {
            return parent::query()->where('id', '>', 3);
        }*/

    public function fields(): array
    {

        //hideOnIndex()  /*скрыть в списке*/
        //hideOnForm()  /*скрыть в форме*/
        //hideOnDetail()  /*скрыть в отображении*/
        //default('текст')  /*в пустое поле добавить*/
        //mask('+7 999 99 99')
        return [
            ID::make()->sortable(),

            Grid::make([
                Column::make([
                    Block::make('Редактирование', [


                        Text::make('Имя', 'title')
                            ->hint('Обязательное поле')
                            //  ->addLink('link', 'https://spb-webmaster.ru', '_blank')
                            ->required(),

                        Image::make('Изображение', 'img')
                            ->hint('На витрину')

                            ->dir('/images') /* Директория где будут хранится файлы в storage (по умолчанию /) */
                            ->disk('public') // Filesystems disk
                            ->allowedExtensions(['jpg', 'gif', 'png', 'svg']) /* Допустимые расширения */
                            ->removable(),

                        Json::make('Галерея', 'gallery')->fields([


                            Image::make('Изображение', 'img')
                                ->hint('На витрину')

                                ->dir('/images') /* Директория где будут хранится файлы в storage (по умолчанию /) */
                                ->disk('public') // Filesystems disk
                                ->allowedExtensions(['jpg', 'gif', 'png', 'svg']) /* Допустимые расширения */
                                ->removable(),
                            Text::make('Описание', 'title'),
                        ])->removable()
                            ->fullPage()
                            ->hideOnIndex(),




                        Text::make('Клиент', 'client')
                            ->hideOnIndex(),

                        Text::make('Категория', 'category'),

                        Email::make('Email', 'projecturl')
                            ->hideOnIndex()
                            ->expansion('Post')
                            ->copy(),


                    ]),
                    Block::make('Описание', [

                        TinyMce::make('description')
                            ->hideOnIndex()
                            ->fieldContainer(false),

                    ]),
                    Block::make('Data', [

                        Json::make('Data')->fields([

                            Text::make('Title'),
                            Text::make('Value')

                        ])->removable()
                            ->hideOnIndex()
                            ->fieldContainer(false),

                    ]),
                ])->columnSpan(8),
                Column::make([
                    Block::make('Атрибуты', [


                        BelongsTo::make('Автор', 'author', 'name')
                        ->searchable(),

                        Date::make('Дата создания', 'projectdate')
                            ->withTime()
                            ->sortable(),

                        BelongsToMany::make('Категория', 'categories')
                            ->hideOnIndex()
                        ->select(),
                        SwitchBoolean::make('Опубликовать', 'active'),

                    ]),
                ])->columnSpan(4),

            ]),
        ];

    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['id', 'title'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
