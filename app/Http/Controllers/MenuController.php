<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;

class MenuController extends Controller
{
    public function index() 
    {
        return view('admin.menu.index', [
            'data' => Menu::paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $menus = new Menu();

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        try {
            DB::beginTransaction();
            $menus->title = $request->title;
            $menus->url = $request->url;
            $menus->content = $request->content;
            $menus->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            return $e->getMessage();
            Log::debug('failed to save', [
                'error' => $e->getMessage() . ' in line ' . $e->getFile() . ' ' . $e->getLine()
            ]);
        }

        return redirect()->route('menus.index')->with('status', 'Data successfully created');
    }

    public function edit($id)
    {
        return view('admin.menu.edit', [
            'data' => Menu::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $menus = Menu::find($id);

        try {
            DB::beginTransaction();

            // Update only if the request has a valid title and content
            if ($request->has('title')) {
                $menus->title = $request->title;
            }

            if ($request->has('url')) {
                $menus->url = $request->url;
            }

            if ($request->has('content')) {
                $menus->content = $request->content;
            }

            $menus->save();

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            Log::error('Failed to update menu', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update menu.']);
        }

        return redirect()->route('menus.index')->with('status', 'Data successfully changed');
    }

    public function destroy($id)
    {
        Menu::find($id)->delete();

        return redirect()->route('menus.index')->with('status', 'Data successfully removed');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $menus = Menu::where('title', 'like', '%' . $query . '%')
                         ->orWhere('url', 'like', '%' . $query . '%')
                         ->paginate(10);
    
        return view('admin.menu.index', [
            'data' => $menus,
            'searchQuery' => $query
        ]);
    }

    public function navMenu()
    {
        $data = Menu::all();
        return view('layouts.client', ['data' => $data]);
    }
}
