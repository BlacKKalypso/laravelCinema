<?php

namespace App\Http\Controllers;

use App\Notifications\MovieCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use App\Models\Movie;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
    public function __construct()
    {
        //$this->middleware('ajax')->only('destroy');
        //$this->middleware('auth')->only('create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Find all movie
        //dd(Movie::where('births_date', '>=', 1960)->get());
        return view('movies.index', ['movies' => Movie::paginate(6) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $movie = Movie::create($request->all());
        $poster = $request->file( 'poster' );
        if($poster != null) {
            $filename = 'poster_' . $movie->id . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->fit(180, 240)
                ->save(public_path('/uploads/posters/' . $filename));
        }
        //Auth()->user()->notify(new MovieCreated($movie));
        return redirect ()->route('movie.index')
            ->with ('ok', __('Movie has been registered'));
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
    public function edit(Movie $movie)
    {
        //$this->authorize('movies.update', $movie);
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        //$this->authorize('movies.update', $movie);
        $movie->update( $request->all());

        $poster = $request->file( 'poster' );
        if($poster != null) {
            $filename = 'poster_' . $movie->id . '.' . $poster->getClientOriginalExtension();
            Image::make($poster)->fit(180, 240)
                ->save(public_path('/uploads/posters/' . $filename));
        }
        return redirect()->route('movie.index')
            ->with('ok', __('The movie has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //$this->authorize('movies.update', $movie);
        $movie->delete();
        return response()->json();
    }


}
