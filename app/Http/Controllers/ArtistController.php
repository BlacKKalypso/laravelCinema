<?php

namespace App\Http\Controllers;

use App\Notifications\ArtistCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Models\Artist;
use App\Http\Requests\ArtistRequest;

class ArtistController extends Controller
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
        //Find all artist
        //dd(Artist::where('births_date', '>=', 1960)->get());
        return view('artists.index', ['artists' => Artist::paginate(6) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistRequest $request)
    {
        $artist = Artist::create($request->all());
        $poster = $request->file( 'poster' );
        if($poster != null) {
            $filename = 'poster_' . $artist->id . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->fit(180, 240)
                ->save(public_path('/uploads/posters/' . $filename));
        }
        //Auth()->user()->notify(new ArtistCreated($artist));
        return redirect ()->route('artist.index')
            ->with ('ok', __('Artist has been registered'));
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
    public function edit(Artist $artist)
    {
        //$this->authorize('artists.update', $artist);
        return view('artists.edit', ['artist' => $artist]);
    }

    public function update(ArtistRequest $request, Artist $artist)
    {
        //$this->authorize('artists.update', $artist);
        $artist->update( $request->all());
        $poster = $request->file( 'poster' );

        if($poster != null) {
            $filename = 'poster_' . $artist->id . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->fit(180, 240)
                ->save(public_path('/uploads/posters/' . $filename));
        }
        return redirect()->route('artist.index')
            ->with('ok', __('The artist has been updated'));
    }

    public function destroy(Artist $artist)
    {
        //$this->authorize('artists.update', $artist);
        $artist->delete();
        return response()->json();
    }
}
