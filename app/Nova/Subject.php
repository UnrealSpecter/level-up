<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Http\Requests\NovaRequest;

use NovaAttachMany\AttachMany;
use Yassi\NestedForm\NestedForm;

class Subject extends Resource
{
    /**
    * The side nav menu order.
    *
    * @var int
    */
    public static $priority = 6;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Subject::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

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
            Trix::make('description')->withFiles('public'),
            Boolean::make('Is Done', function () {
                return $this->isDone;
            }),

            Heading::make('Lessen'),
            BelongsToMany::make('Lessons'),
            AttachMany::make('Lessons')
                ->showCounts()
                ->showPreview()
                ->fullWidth()
                ->help('<b>Tip:</b> Voeg lessen toe.'),

            BelongsToMany::make('Assignments'),
            NestedForm::make('Assignments'),

            HasMany::make('Materials'),
            NestedForm::make('Materials'),

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
