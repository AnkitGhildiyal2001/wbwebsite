<?php

namespace App\Http\Controllers;

use App\CampaignCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CampaignCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year = date("Y");

        $validation = $request->validate([
            'category' => 'required|array|max:3',
            'birthday' => 'required|numeric|min:1|max:31',
            'birthmonth' => 'required',
            'birthyear' => "required|numeric|digits:4|min:1900|max:{$year}",
            'state' => 'required|string'
        ]);

        $currentUser = auth()->user();

        $birthday = $validation['birthyear'] . '-' . $validation['birthmonth'] . '-' . $validation['birthday'];
        $currentUser->birthday = Carbon::createFromDate($birthday);
        $currentUser->state = $validation['state'];
        $currentUser->save();

        $categories = $request->category;

        $currentUser->campaignCategories()->sync($categories);

        $request->session()->flash('status', 'Vielen Dank, wir haben deine Kategorien gespeichert.');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CampaignCategory $campaignCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CampaignCategory $campaignCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampaignCategory $campaignCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CampaignCategory  $campaignCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampaignCategory $campaignCategory)
    {
        //
    }
}
