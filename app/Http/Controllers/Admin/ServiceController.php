<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index', [
            'data' => Service::all()
        ]);
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $seervice = new Service();
        $seervice->title = $request->title;
        $seervice->description = $request->description;
        $seervice->save();
        return redirect()->route('services.index')->with('status', 'Data successfully created');
    }
    public function edit($id)
    {
        $seervice = Service::find($id);
        return view('admin.service.edit', [
            'data' => $seervice
        ]);
    }

    public function update(Request $request, $id)
    {
        $seervice = Service::find($id);
        $seervice->title = $request->title;
        $seervice->description = $request->description;
        $seervice->save();
        return redirect()->route('services.index')->with('status', 'Data successfully changed');
    }

    public function destroy($id)
    {
        $seervice = Service::find($id);
        $seervice->delete();
        return redirect()->route('services.index')->with('status', 'Data successfully removed');
    }
}
