<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('ajax')->only('destroy');
    }

    public function index()
    {
        return view('rooms.index', [ 'rooms' => Room::paginate(6) ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequest $request)
    {
        $room = Room::create($request->all());
        return redirect()->route('room.index')
            ->with('ok', __('Room has been registered'));
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

    public function edit(Room $room)
    {
        return view('rooms.edit', ['room' => $room]);
    }

    public function update(RoomRequest $request, Room $room)
    {
        $room->update($request->all());
        return redirect()->route('room.index')
            ->with('ok', __('The artist has been updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return reponse()->json();
    }
}
