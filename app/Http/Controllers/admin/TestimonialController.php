<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title="Testimonials";
        $testimonials=Testimonial::query()->select('title', 'content', 'created_at', 'status', 'slug')->orderByDesc('created_at')->paginate(10);

        return view('admin.testimonial.index', compact('title', 'testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title='Create Testimonial';
        return view('admin.testimonial.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'cont' => 'required',
        ]);
        Testimonial::query()->create([
            'title'=>$request->title,
            'content'=>$request->cont,
            'user_id'=>0,//todo add user_id
        ]);
        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $testimonial = Testimonial::query()->where('slug', $slug)->firstOrFail();
        if ($testimonial['status']==0){
            $testimonial['status']=1;
            $testimonial->update(['status' => 1]);

        }
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $testimonial=Testimonial::query()->where('slug', $slug)->firstOrFail();
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'The record has been deleted');
    }
}
