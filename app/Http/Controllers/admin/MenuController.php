<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title='Menu';
        $menus = Menu::query()->select('slug', 'title', 'description', 'image', 'price')->paginate();
        return view('admin.menu.index', compact('menus', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all('id', 'title');
        $title='Create Menu';
        return view('admin.menu.create', compact('types', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:255',
            'image' => 'required|image',
            'price' => 'required|integer',
        ]);
        $date = $request->all();
        $date['image'] = Menu::uploadImage($request);
        $menu = Menu::query()->create($date);
        $menu->types()->sync($request->types);
        return redirect()->route('menus.index')->with('success', 'The dish has been successfully added to the menu');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $title='Show Menu';
        $menu = Menu::query()->where('slug', $slug)->first();
        $types = $menu->types;

        return view('admin.menu.show', compact('menu', 'types', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $title='Edit Menu';
        $menu = Menu::query()->where('slug', $slug)->first();
        $types = Type::all('id', 'title');
        $types_menu = $menu->types->toArray();
        $types_menu = array_column($types_menu, 'id');
        return view('admin.menu.edit', compact('menu', 'types', 'types_menu', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $menu = Menu::query()->where('slug', $slug)->first();
        $date = $request->all();
        $validateImage = $request->file('image')==null?'':'required|image';
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:255',
            'image' => $validateImage,
            'price' => 'required|integer',
        ]);

        $date['image'] = Menu::uploadImage($request, $request->old_image);
        $menu->update($date);
        $menu->types()->sync($request->types);
        return redirect()->route('menus.index')->with('success', 'The change has been saved');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $menu = Menu::query()->where('slug', $slug)->first();
        Storage::delete($menu->image);
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'The record has been deleted');
    }
}
