<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CalendarController extends Controller
{


    public function index()
    {
        return view('admin.calendar.index');
    }

    public function getEvents(){
        $bookings=Booking::all();
        $events=self::bookingToEvents($bookings);
        return response()->json($events);
    }
    public function deleteEvent($id){
        $booking=Booking::query()->findOrFail($id)->delete();

        return response()->json(['message'=>'Event deleted successfully']);
    }
    public function update(Request $request, $id){

        $booking=Booking::query()->findOrFail($id);
        $booking->update([
            'date_time'=>Carbon::parse($request->input('start_date'))->setTimezone('UTC'),
        ]);
        return response()->json(['message'=>'Event moved successfully']);
    }

    public function search(Request $request){

        $searchKeywords = $request->input('title');
        $bookingEvents = Booking::query()->where('name', 'like', '%'.$searchKeywords.'%')->get();

        $events= self::bookingToEvents($bookingEvents);
        return response()->json($events);
    }

    //TODO Adding resized
    public function resize(Request $request, $id){

        $booking=Booking::query()->findOrFail($id);
        $booking->update([
            ''=>Carbon::parse($request->input('end_date'))->setTimezone('UTC'),
        ]);
        return response()->json(['message'=>'Event resized successfully']);
    }

    public static function bookingToEvents($bookings){
        $events=[];
        foreach ($bookings as $booking){
            $events[]=[
                'id'=>$booking->id,
                'title'=>$booking->name,
                'start'=>$booking->date_time,
                'end'=>null,
            ];
        }
        return $events;
    }

}
