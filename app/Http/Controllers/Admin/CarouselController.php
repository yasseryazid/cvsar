<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index()
    {
        return view('admin.carousel.index', [
            'data' => Carousel::all()
        ]);
    }

    public function create()
    {
        return view('admin.carousel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);
        $slider = new Carousel();
        $slider->title = $request->title;
        $slider->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('image-slider', 'public');
            $slider->image = $file;
        }
        $slider->save();
        return redirect()->route('carousels.index')->with('status', 'Data successfully created');
    }
    public function edit($id)
    {
        $slider = Carousel::find($id);
        return view('admin.carousel.edit', [
            'data' => $slider
        ]);
    }

    public function update(Request $request, $id)
    {
        $slider = Carousel::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        if ($request->hasFile('image')) {
            if (file_exists(storage_path('app/public/' . $slider->image))) {
                unlink(storage_path('app/public/' . $slider->image));
            }
            $file = $request->file('image')->store('image-slider', 'public');
            $slider->image = $file;
        }
        $slider->save();
        return redirect()->route('carousels.index')->with('status', 'Data successfully changed');
    }

    public function destroy($id)
    {
        $slider = Carousel::find($id);
        if (file_exists(storage_path('app/public/' . $slider->image))) {
            unlink(storage_path('app/public/' . $slider->image));
        }
        $slider->delete();
        return redirect()->route('carousels.index')->with('status', 'Data successfully removed');
    }
}
