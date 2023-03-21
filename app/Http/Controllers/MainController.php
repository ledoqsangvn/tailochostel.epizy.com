<?php

namespace App\Http\Controllers;

use App;
use App\Models\Room;
use App\Models\User;
use Auth;
use DB;
use File;
use Illuminate\Http\Request;
use Route;

class MainController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')->where('state', 'available')->take(3)->get();
        $countAvailable = Room::all()->where('state', 'available')->count();
        return view('guest.index', compact('rooms', 'countAvailable'));
    }
    public function allRoom($room_state)
    {
        $countRented = DB::table('rooms')->where('state', "rented")->count();
        $countAvailable = DB::table('rooms')->where('state', "available")->count();
        $countAll = DB::table('rooms')->count();
        if ($room_state == 'all') {
            $rooms = DB::table('rooms')->paginate(8);
            $count = DB::table('rooms')->where('state', $room_state)->count();
            $count = DB::table('rooms')->where('state', $room_state)->count();
            $count = DB::table('rooms')->count();
            $heading = __("All rooms");
        } elseif ($room_state == "rented") {
            $rooms = DB::table('rooms')->where('state', $room_state)->paginate(8);
            $count = DB::table('rooms')->where('state', $room_state)->count();
            $heading = __("Rented rooms");
        } elseif ($room_state == "available") {
            $rooms = DB::table('rooms')->where('state', $room_state)->paginate(8);
            $count = DB::table('rooms')->where('state', $room_state)->count();
            $heading = __("Available rooms");
        }
        return view('guest.rooms.index', compact('rooms', 'heading', 'count', 'countAll', 'countAvailable', 'countRented'));
    }
    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('keyword');
        // Search in the title and body columns from the posts table
        $results = Room::query()
            ->where('roomNo', 'LIKE', "%{$search}%")
            ->orWhere('roomFloor', 'LIKE', "%{$search}%")
            ->get();
        $count = Room::query()
            ->where('roomNo', 'LIKE', "%{$search}%")
            ->orWhere('roomFloor', 'LIKE', "%{$search}%")
            ->count();

        // Return the search view with the resluts compacted
        return view('guest.rooms.search', compact('results', 'search', 'count'));
    }
    public function viewRoom($id_room)
    {
        $room = Room::findOrFail($id_room);
        return view('guest.rooms.view', compact('room'));
    }
    public function rentRoom($id_room)
    {
        $room = Room::findOrFail($id_room);
        if ($room->state == "available") {
            $room->state = 'rented';
        }
        $room->update();
        return redirect('/rooms/all');
    }
    public function changeLanguage($language)
    {
        \Session::put('locale', $language);

        return redirect()->back();
    }
}
