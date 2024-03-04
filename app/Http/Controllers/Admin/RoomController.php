<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('admin.room.index', [
            'data' => Room::all()
        ]);
    }

    public function create()
    {
        return view('admin.room.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:rooms,slug',
            'description' => 'required',
            'price' => 'required',
            'max_person' => 'required'
        ]);
        $room = new Room();
        $room->name = $request->name;
        $room->description = $request->description;
        $room->slug = $request->slug;
        $room->price = $request->price;
        $room->max_person = $request->max_person;
        $room->save();
        return redirect()->route('rooms.index')->with('status', 'Data successfully created');
    }

    public function edit($id)
    {
        return view('admin.room.edit', [
            'data' => Room::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        $room->name = $request->name;
        $room->description = $request->description;
        $room->slug = $request->slug;
        $room->price = $request->price;
        $room->max_person = $request->max_person;
        $room->save();
        return redirect()->route('rooms.index')->with('status', 'Data successfully changed');
    }

    public function show($id)
    {
        $room = Room::with('images')->find($id);
        return view('admin.room.show', ['data' => $room]);
    }

    public function addImage($id)
    {
        $room = Room::find($id);
        return view('admin.room.add-image', [
            'data' => $room
        ]);
    }

    public function storeImage(Request $request, $id)
    {

        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $image) {
                $im = new RoomImage();
                $im->room_id = $id;
                $file = $image->store('rooms', 'public');
                $im->image = $file;
                $im->save();
            }
        }

        return redirect()->route('rooms.show', [$id]);
    }

    public function destroyImage($id)
    {
        $data = RoomImage::find($id);
        $room_id = $data->room_id;
        if (file_exists(storage_path('app/public/' . $data->image))) {
            unlink(storage_path('app/public/' . $data->image));
        }
        $data->delete();
        return redirect()->route('rooms.show', [$room_id]);
    }

    public function destroy($id)
    {
        $room = Room::find($id);
        $roomImage = RoomImage::where('room_id', $room->id)->get();
        foreach ($roomImage as $row) {
            if (file_exists(storage_path('app/public/' . $row->image))) {
                unlink(storage_path('app/public/' . $row->image));
            }
        }
        $room->delete();
        return redirect()->route('rooms.index')->with('status', 'Data successfully removed');
    }
}
