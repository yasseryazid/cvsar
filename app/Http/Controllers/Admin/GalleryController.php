<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index', [
            'data' => Gallery::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required'
        ]);
        $gallery = new Gallery();
        $gallery->posted_by = Auth::user()->id;
        $gallery->title = $request->title;
        $gallery->kategori = $request->kategori;
        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('gallery', 'public');
            $gallery->image = $file;
        }
        $gallery->save();
        return redirect()->route('galleries.index')->with('status', 'Data successfully created');
    }

    public function edit($id)
    {
        return view('admin.whats-new.edit', [
            'data' => Gallery::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        $gallery->posted_by = Auth::user()->id;
        $gallery->title = $request->title;
        $gallery->kategori = $request->kategori;
        if ($request->hasFile('image')) {
            if (file_exists(storage_path('app/public/' . $gallery->image))) {
                unlink(storage_path('app/public/' . $gallery->image));
            }
            $file = $request->file('image')->store('gallery', 'public');
            $gallery->image = $file;
        }
        $gallery->save();
        return redirect()->route('galleries.index')->with('status', 'Data successfully changed');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if (file_exists(storage_path('app/public/' . $gallery->image))) {
            unlink(storage_path('app/public/' . $gallery->image));
        }
        $gallery->delete();
        return redirect()->route('galleries.index')->with('status', 'Data successfully removed');
    }
}
