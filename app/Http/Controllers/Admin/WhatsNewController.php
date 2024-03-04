<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WhatsNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhatsNewController extends Controller
{
    public function index()
    {
        return view('admin.whats-new.index', [
            'data' => WhatsNew::with('user')->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('admin.whats-new.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required'
        ]);
        $whatsNew = new WhatsNew();
        $whatsNew->posted_by = Auth::user()->id;
        $whatsNew->title = $request->title;
        $whatsNew->description = $request->description;
        if ($request->hasFile('image')) {
            $file = $request->file('image')->store('whats-new', 'public');
            $whatsNew->image = $file;
        }
        $whatsNew->save();
        return redirect()->route('whats-new.index')->with('status', 'Data successfully created');
    }

    public function edit($id)
    {
        return view('admin.whats-new.edit', [
            'data' => WhatsNew::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $whatsNew = WhatsNew::find($id);
        $whatsNew->posted_by = Auth::user()->id;
        $whatsNew->title = $request->title;
        $whatsNew->description = $request->description;
        if ($request->hasFile('image')) {
            if (file_exists(storage_path('app/public/' . $whatsNew->image))) {
                unlink(storage_path('app/public/' . $whatsNew->image));
            }
            $file = $request->file('image')->store('whats-new', 'public');
            $whatsNew->image = $file;
        }
        $whatsNew->save();
        return redirect()->route('whats-new.index')->with('status', 'Data successfully changed');
    }

    public function destroy($id)
    {
        $whatsNew = WhatsNew::find($id);
        if (file_exists(storage_path('app/public/' . $whatsNew->image))) {
            unlink(storage_path('app/public/' . $whatsNew->image));
        }
        $whatsNew->delete();
        return redirect()->route('whats-new.index')->with('status', 'Data successfully removed');
    }
}
