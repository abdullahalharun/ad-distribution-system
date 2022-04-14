<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\AdvertisementSize;
use App\Models\Institution;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Advertisement::all();
        // dd($ads[0]->newspapers);
        return view('advertisement.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institutions = Institution::all();
        $adsizes = AdvertisementSize::all();
        $newspapers = Newspaper::all();

        return view('advertisement.create', compact('institutions', 'adsizes', 'newspapers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = time() . '.' . $request->ad_file->extension();

        $data = $request->all();
        $data['ad_file'] = $fileName;
        Advertisement::create($data);

        $request->ad_file->move(public_path('files'), $fileName);

        toastr()->success('Advertisement Added Successfully.');
        return redirect()->route('advertisement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $Advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $Advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $Advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $Advertisement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $Advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advertisement $Advertisement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $Advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $Advertisement)
    {
        //
    }
}