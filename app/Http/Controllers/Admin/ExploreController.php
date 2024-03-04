<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Explore;
use App\Models\ExploreDetail;
use App\Models\ExploreImage;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index()
    {
        // return Explore::with('detail.images')->get();
        return view('admin.explore.index', [
            'data' => Explore::with('detail.images')->get()
        ]);
    }

    public function create()
    {
        return view('admin.explore.create');
    }

    public function store(Request $request)
    {
        $explore = new Explore();
        $explore->ttle = $request->title;
        $explore->description = $request->description;
        $explore->save();
        return redirect()->route('explores.index')->with('status', "Data successfully created");
    }

    public function edit($id)
    {
        return view('admin.explore.edit', [
            'data' => Explore::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $explore = Explore::find($id);
        $explore->ttle = $request->title;
        $explore->description = $request->description;
        $explore->save();
        return redirect()->route('explores.index')->with('status', "Data berhasil diupdate");
    }
    public function show($id)
    {
    }
    public function destroy($id)
    {
        $explore = Explore::find($id);
        $details = ExploreDetail::where('explore_id', $id)->get();
        foreach ($details as $detail) {
            $images = ExploreImage::where('detail_explore_id', $detail->id)->get();
            foreach ($images as $image) {
                if (file_exists(storage_path('app/public/' . $image->image))) {
                    unlink(storage_path('app/public/' . $image->image));
                }
                $image->delete();
            }
            $detail->delete();
        }
        $explore->delete();
        return redirect()->route('explores.index')->with('status', 'Data berhasil dihapus');
    }

    public function createDetailExplore($id)
    {
        return view('admin.explore.detail.create', [
            'data' => Explore::find($id)
        ]);
    }

    public function storeDetailExplore(Request $request, $id)
    {
        $detail = new ExploreDetail();
        $detail->explore_id = $id;
        $detail->title = $request->title;
        $detail->location = $request->location;
        $detail->map_url = $request->map_url;
        $detail->description_id = $request->description_id;
        $detail->description_en = $request->description_en;
        if ($detail->save()) {
            $files = $request->file('images');
            if ($request->hasFile('images')) {
                foreach ($files as $img) {
                    // return 'ok';
                    $imageExplore = new ExploreImage();
                    $imageExplore->detail_explore_id = $detail->id;
                    $file = $img->store($id . '_' . $detail->title, 'public');
                    $imageExplore->image = $file;
                    $imageExplore->save();
                }
            }
        }
        return redirect()->route('explores.index')->with('status', 'Data berhasil disimpan');
    }

    public function destroyDetailExplore($id)
    {
        $detail = ExploreDetail::find($id);
        $detailImages = ExploreImage::where('detail_explore_id', $id)->get();
        foreach ($detailImages as $d) {
            if (file_exists(storage_path('app/public/' . $d->image))) {
                unlink(storage_path('app/public/' . $d->image));
            }
            $d->delete();
        }
        $detail->delete();
        return redirect()->route('explores.index')->with('status', 'Data berhasil dihapus');
    }
}
