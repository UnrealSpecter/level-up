<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\BelongsToMany;

use NovaAttachMany\AttachMany;

class User extends Resource
{
    /**
    * The side nav menu order.
    *
    * @var int
    */
    public static $priority = 1;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\User::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'email',
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
            Heading::make('<div class="rounded shadow-lg w-full p-8 font-sans font-bold bg-black text-white px-100">Basis gegevens: </div>')->asHtml()->hideFromDetail(),

            ID::make()->sortable()->hideFromIndex(),

            Gravatar::make()->maxWidth(50),

            Text::make('first_name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('last_name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),

            Heading::make('<div class="rounded shadow-lg w-full p-8 font-sans font-bold bg-black text-white px-100">Levels: </div>')->asHtml()->hideFromDetail(),
            BelongsToMany::make('Levels'),
            AttachMany::make('Levels')
                ->showCounts()
                ->fullWidth()
                ->help('<b>Tip:</b> Voeg levels toe.'),

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
