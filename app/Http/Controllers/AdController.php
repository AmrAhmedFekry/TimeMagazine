<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad ;
use Session;
use Illuminate\Support\Facades\Validator;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ads = Ad::all();
        return view ('admin.all_ads')->with('ads' , $ads);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add_ad');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->ajax())
        {

            $this->validate($request, [
                'ad_name'  =>'required',
                'ad_image' => 'image|mimes:jpg,png',
                'ad_position' =>'required',
            ]);

        $imageName = time().'.'.$request->file('ad_image')->getClientOriginalExtension();
        $image =  $request->file('ad_image')->move(public_path('images'), $imageName);
        $ad = new Ad;
        $ad->ad_image = $imageName ;
        $ad->ad_position =$request->input('ad_position');
        $ad->ad_name = $request->input('ad_name');
        $ad->save();
        $ads = Ad::all();
        Session::flash('success', 'The AD has been saved successfully');
        return view('admin.all_ads')->with('ads',$ads);



        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
