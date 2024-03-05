<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\ImageAbout;
use App\Models\Room;
use App\Models\Staff;
use App\Models\WhatsNew;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function aboutUs()
    {
        return view('users.about-us.index', [
            'data' => [
                'about_us' => About::first(),
                'staffs' => Staff::all(),
                'image_about' => ImageAbout::all()
            ]
        ]);
    }

    public function room()
    {
        return view('users.room.index', [
            'data' => [
                'rooms' => Room::with('cover')->orderBy('created_at', 'desc')->paginate(9)
            ]
        ]);
    }

    public function roomDetail($slug)
    {
        return view('users.room.detail', [
            'data' => ['room' => Room::with('images')->where('slug', $slug)->first()]
        ]);
    }

    public function whatsNew()
    {
        return view('users.whats-new.index', [
            'data' => [
                'whatsNew' => WhatsNew::orderBy('created_at', 'desc')->paginate(9)
            ]
        ]);
    }

    public function whatsNewDetail($id)
    {
        return view('users.whats-new.detail', [
            'data' => [
                'whatsNew' => WhatsNew::find($id)
            ]
        ]);
    }

    public function gallery()
    {
        return view('users.gallery.index', [
            'data' => [
                'galleries' => Gallery::orderBy('created_at', 'desc')->get()
            ]
        ]);
    }

    public function medicalCheckup()
    {
        return view('users.medical-checkup.index');
    }

    public function profile()
    {
        return view('users.profile.index');
    }

    public function menu($slug)
    {
        $menu = Menu::where('url', $slug)->first();

        return view('menu.index', [
            'menu' => $menu
        ]);
    }
}
