<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Campaign extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Campaign::class;

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
        'id', 'title'
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

            Text::make('Title' , 'title')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Slug', 'slug')
                ->sortable()
                ->rules('required', 'max:255'), 

            Textarea::make('Description')
                    ->rules('required'),

            Number::make('Number of influencer', 'influencer_quantity')
                    ->sortable()
                    ->rules('required'),        
                          
            Boolean::make('Influencers must be approved by us', 'approve_influencer')
                    ->hideFromIndex(),

            Boolean::make('We will dispatch the products ourselves', 'shipping_by_company')
                    ->hideFromIndex(),

            Boolean::make('We would like individual packaging with our logo', 'custom_packaging')
                    ->hideFromIndex(),

            BelongsTo::make('Company'), 

            BelongsTo::make('Target Audience', 'targetAudience', Role::class),

            BelongsTo::make('Campaign Category', 'campaignCategory')->nullable(),        

            BelongsToMany::make('Users', 'users')
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
