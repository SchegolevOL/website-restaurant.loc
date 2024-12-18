<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Jobs\BookingMailJob;
use App\Models\Booking;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $bookings = Booking::query()->select('slug', 'name', 'email', 'date_time','number_of_persons','special_request', 'status')->orderByDesc('date_time')->paginate(10);
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
        $title='Create Booking';
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
        return view('admin.booking.create', compact('title'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {

        $booking = Booking::query()->where('slug', $slug)->firstOrFail();
        if ($booking['status']==0){
            $booking['status']=1;
            $booking->update(['status' => 1]);

            BookingMailJob::dispatch($booking);
        }

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {

        $title='Edit Booking';
        $booking = Booking::query()->where('slug', $slug)->first();
        return view('admin.booking.edit', compact('title', 'booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $data = $request->all();
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
        $data['date_time'] = $date;


        $booking = Booking::query()->where('slug', $slug)->first();
        $booking->update($data);
        return redirect()->route('bookings.index')->with('success', 'The change has been saved');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $booking = Booking::query()->where('slug', $slug)->first();
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'The record has been deleted');
    }
}
