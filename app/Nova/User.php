<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Select;

class User extends Resource
{
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
        'id', 'username', 'name', 'email', 'firstname', 'lastname'
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
            ID::make()->sortable(),

            Gravatar::make()->maxWidth(50),

            Text::make('Username', 'username')
                ->sortable()
                ->rules('required', 'max:255'),
            
            Text::make('Slug', 'slug')
                ->sortable()
                ->rules('required', 'max:255'),    

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Email', 'email')
                ->sortable()
                ->rules('required', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password', 'password')
                ->onlyOnForms()
                ->creationRules('required', 'string', 'min:8')
                ->updateRules('nullable', 'string', 'min:8'),

            Text::make('First name', 'firstname')
                ->sortable()
                ->rules('required', 'max:255'), 

            Text::make('Last name', 'lastname')
                ->sortable()
                ->rules('required', 'max:255'),

            BelongsTo::make('Role')->nullable(),

            Text::make('Address', 'address')
                ->sortable()
                ->rules('max:255')
                ->hideFromIndex(),

            Text::make('Zip', 'zip')
                ->sortable()
                ->rules('max:255')
                ->hideFromIndex(),
            
            Text::make('City', 'city')
                ->sortable()
                ->rules('max:255')
                ->hideFromIndex(),

            Text::make('Country', 'country')
                ->sortable()
                ->rules('max:255')
                ->hideFromIndex(),
                
            BelongsToMany::make('CampaignCategories'), 
            
            BelongsToMany::make('Campaigns','campaigns')
                        ->fields(function() {
                            return [
                                Select::make('State id', 'state_id')
                                    ->options([
                                        '1' => 'Bestätigung ausstehend',
                                        '2' => 'In Bearbeitung',
                                        '3' => 'Versendet',
                                        '4' => 'Nachweis eingereicht',
                                        '5' => 'Klärungsbedarf',
                                        '6' => 'Abgeschlossen',
                                        '7' => 'Abgelehnt'
                                    ])->displayUsingLabels()
                                    ->displayUsing(function(){
                                        if(isset($this->pivot)){
                                            if($this->pivot->state_id == 7){
                                                return "Abgelehnt";
                                            }else if($this->pivot->state_id == 6){
                                                return "Abgeschlossen";
                                            }else if($this->pivot->state_id == 5){
                                                return "Klärungsbedarf";
                                            }else if($this->pivot->state_id == 4){
                                                return "Nachweis eingereicht";
                                            }else if($this->pivot->state_id == 3){
                                                return "Versendet";
                                            }else if($this->pivot->state_id == 2){
                                                return "In Bearbeitung";
                                            }else if($this->pivot->state_id == 1){
                                                return "Bestätigung ausstehend";
                                            }else {
                                                return "";
                                            }
                                        }else{
                                            return "";
                                        }
                                    }),
                                Boolean::make('Approved', 'approved')
                                ->displayUsing(function(){
                                    return isset($this->pivot) ? $this->pivot->approved : '-';
                                }),
                            ];
                        }), 
                         
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
