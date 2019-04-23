<?php

namespace App\Http\Controllers;

use App\Notifications\TheatreCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Models\Theatre;
use App\Http\Requests\TheatreRequest;

/**
 * Class TheatreController
 * @package App\Http\Controllers
 */
class TheatreController extends Controller
{
    public function __construct()
    {
        $this->middleware('ajax')->only('destroy');
        //$this->middleware('auth')->only('create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Find all theatre
        //dd(Theatre::where('births_date', '>=', 1960)->get());
        return view('theatres.index', ['theatres' => Theatre::paginate(4) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theatres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TheatreRequest $request)
    {
        $theatre = Theatre::create($request->all());
        $poster = $request->file( 'poster' );
        if($poster != null) {
            $filename = 'poster_' . $theatre->id . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->fit(180, 240)
                ->save(public_path('/uploads/posters/' . $filename));
        }
        //Auth()->user()->notify(new TheatreCreated($theatre));
        return redirect ()->route('theatre.index')
            ->with ('ok', __('Theatre has been registered'));
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
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Theatre $theatre)
    {
        //$this->authorize('theatres.update', $theatre);
        return view('theatres.edit', ['theatre' => $theatre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TheatreRequest $request, Theatre $theatre)
    {
        //$this->authorize('theatres.update', $theatre);
        $theatre->update( $request->all());
        $poster = $request->file( 'poster' );

        if($poster != null) {
            $filename = 'poster_' . $theatre->id . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->fit(180, 240)
                ->save(public_path('/uploads/posters/' . $filename));
        }
        return redirect()->route('theatre.index')
            ->with('ok', __('The theatre has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theatre $theatre)
    {
        //$this->authorize('theatres.update', $theatre);
        $theatre->delete();
        return response()->json();
    }
}
