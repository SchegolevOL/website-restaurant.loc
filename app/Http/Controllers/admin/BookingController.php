<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bookings = Booking::query()->select('slug', 'name', 'email', 'date_time','number_of_persons','special_request')->paginate(10);
$title='Bookings';
        return view('admin.booking.index', compact('bookings', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title='Create Booking';
        return view('admin.booking.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email'=>'required|email',
            'date_time' => 'required',
            'number_of_persons' => 'required',
            'special_request'
        ]);
        $d = $request->date_time;

        $date = strtotime($d);
        $date =date ('o-m-d H:i', $date);

        Booking::query()->create([
            'name'=>$request->name,
            'email'=>$request->email,
            'date_time'=>$date,
            'number_of_persons'=>$request->number_of_persons,
            'special_request'=>$request->special_request,
        ]);
        return view('admin.booking.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
