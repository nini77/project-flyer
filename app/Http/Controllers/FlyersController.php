<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\FlyerRequest;

use App\Flyer;

class FlyersController extends Controller
{

    public function __construct()
    {

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flyers =Flyer::orderBy('id')->paginate(10);;

        return view('flyers.index',compact('flyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // flash('Hello world','message');
        // flash()->info('Success!','Your Flyer has been created!');

        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlyerRequest $request)
    {
        Flyer::create($request->all());

        // flash('Success!','Your Flyer has been created!');
        flash()->success('Success!','Your Flyer has been created!');


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($zip,$street)
    {

        $flyer =Flyer::locatedAt($zip,$street)->first();
        return view('flyers.show',compact('flyer'));
        // return Flyer::where(compact('zip','street'))->first();
    }


    public function addphoto($zip,$street,Request $request)
    {
        $file = $request->file('photo');
        $name = time() . $file->getClientOriginalName();

        $file->move('Flyers/photos',$name);

        $flyer =Flyer::locatedAt($zip,$street)->first();
        $flyer->photos()->create(['path' =>"/flyers/photos/{$name}"]);

        return 'working on it';
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
