<?php

namespace App\Http\Controllers;

use App\Models\Room;
use File;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function addRoom()
    {
        return view('admin.rooms.add');
    }
    public function postAddRoom(Request $request)
    {
        $room = new Room;
        $room->roomNo = $request->input('roomNo');
        $room->roomFloor = $request->input('roomFloor');
        $room->roomPrice = $request->input('roomPrice');
        $room->roomDescription = $request->input('roomDescription');
        $room->state = 'available';
        if ($request->hasfile('roomImg')) {
            $file = $request->file('roomImg');
            $filename = time() . '.' . $file->extension();
            $file->move('assets/img/rooms', $filename);
            $room->roomImg = $filename;
        }
        $room->save();
        return redirect('/rooms/all');
    }
    public function edit($id_room)
    {
        $room = Room::findOrFail($id_room);
        return view('admin.rooms.edit', compact('room'));
    }
    public function postEdit(Request $request, $id_room)
    {
        $room = Room::findOrFail($id_room);
        $room->roomNo = $request->input('roomNo');
        $room->roomFloor = $request->input('roomFloor');
        $room->roomDescription = $request->input('roomDescription');
        if ($request->hasfile('roomImg')) {
            $des = 'assets/img/rooms/' . $room->roomImg;
            File::delete($des);
            $file = $request->file('roomImg');
            $filename = time() . '.' . $file->extension();
            $file->move('assets/img/rooms', $filename);
            $room->roomImg = $filename;
        }
        $room->state = $request->input('state');
        $room->roomPrice = $request->input('roomPrice');
        $room->update();
        return redirect('/rooms/all');
    }
    public function deleteRoom($id_room)
    {
        $room = Room::findOrFail($id_room);
        if ($room->state == "rented") {
            $room->state = 'available';
        } else {
            $room->state = 'available';
        }
        $room->update();
        return redirect('/rooms/all');
    }
}
