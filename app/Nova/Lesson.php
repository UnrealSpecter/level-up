<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;

use NovaAttachMany\AttachMany;
use Yassi\NestedForm\NestedForm;

class Lesson extends Resource
{
    /**
    * The side nav menu order.
    *
    * @var int
    */
    public static $priority = 5;

    public static $displayInNavigation = true;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Lesson::class;

    public static function label() {
        return 'Studieblokken';
    }

    public static function singularLabel()
    {
     return 'Studieblok';
    }

    public static $title = "title";

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title', 'description'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Heading::make('Basis Gegevens'),
            ID::make()->sortable()->hideFromIndex(),
            Text::make('title'),
            Textarea::make('description'),
            Boolean::make('Is Done', function () {
                return $this->isDone;
            }),

            BelongsToMany::make('Modules'),
            Heading::make('Subjects')->hideFromDetail(),
            NestedForm::make('Subjects'),
            BelongsToMany::make('Subjects'),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
