<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        return view('admin.staff.index', [
            'data' => Staff::all()
        ]);
    }

    public function create()
    {
        return view('admin.staff.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'photo' => 'required'
        ]);
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->job = $request->job;
        $staff->facebook_account = $request->facebook_account;
        $staff->twitter_account = $request->twitter_account;
        $staff->instagram_account = $request->instagram_account;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo')->store('staff', 'public');
            $staff->photo = $file;
        }
        $staff->save();
        return redirect()->route('staffs.index')->with('status', 'Data successfully created');
    }
    public function edit($id)
    {
        $staff = Staff::find($id);
        return view('admin.staff.edit', [
            'data' => $staff
        ]);
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);
        $staff->name = $request->name;
        $staff->job = $request->job;
        $staff->facebook_account = $request->facebook_account;
        $staff->twitter_account = $request->twitter_account;
        $staff->instagram_account = $request->instagram_account;
        if ($request->hasFile('image')) {
            if (file_exists(storage_path('app/public/' . $staff->image))) {
                unlink(storage_path('app/public/' . $staff->image));
            }
            $file = $request->file('image')->store('image-slider', 'public');
            $staff->image = $file;
        }
        $staff->save();
        return redirect()->route('staffs.index')->with('status', 'Data successfully changed');
    }

    public function destroy($id)
    {
        $staff = Staff::find($id);
        if (file_exists(storage_path('app/public/' . $staff->photo))) {
            unlink(storage_path('app/public/' . $staff->photo));
        }
        $staff->delete();
        return redirect()->route('staffs.index')->with('status', 'Data successfully removed');
    }
}
