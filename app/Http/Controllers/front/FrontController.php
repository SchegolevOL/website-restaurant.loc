<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Chief;
use App\Models\Testimonial;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $title = 'home';

        return view('front.home', compact('title'));
    }

    public function about()
    {
        $title = 'about';
        $chiefs = Chief::query()->inRandomOrder()->limit(4)->get();

        return view('front.about', compact('title', 'chiefs'));
    }

    public function testimonial()
    {
        $title = 'testimonial';
        $testimonials = Testimonial::query()->where('status', '=', 1)->inRandomOrder()->limit(4)->get();

        $users=User::query()->select('name', 'image', 'id')->whereIn('id',$testimonials->pluck('user_id'))->get();

//
        return view('front.testimonial', compact('title', 'testimonials', 'users'));
    }

    public function team()
    {
        $title = 'team';
        $chiefs = Chief::query()->get();
        return view('front.team', compact('title', 'chiefs'));
    }

    public function booking()
    {
        $title = 'booking';
        return view('front.booking', compact('title'));
    }

    public function contact()
    {
        $title = 'contact';

        return view('front.contact', compact('title'));
    }

    public function menu()
    {
        $title = 'menu';

        $types = Type::query()->with(['menus' => function ($query) {
            $query->select('image', 'title', 'description', 'price');
        }])->get();


        return view('front.menu', compact('title', 'types'));
    }

    public function service()
    {
        $title = 'service';
        return view('front.service', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'date_time' => 'required',
            'number_of_persons' => 'required',
            'special_request'
        ]);
        $d = $request->date_time;

        $date = strtotime($d);
        $date = date('o-m-d H:i', $date);

        Booking::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'date_time' => $date,
            'number_of_persons' => $request->number_of_persons,
            'special_request' => $request->special_request,
        ]);
        return redirect()->back()->with('success', 'The table is reserved');
    }

    public function profile()
    {
        $title='Profile';
        return view('user.profile', compact('title'));
    }
    public function messageCreate(Request $request){
        $request->validate([
            'title' => 'required',
            'message' => 'required',
        ]);
        Testimonial::query()->create([
            'title'=>$request->title,
            'content'=>$request->message,
            'user_id'=>auth()->id()
            ]);
        return redirect()->back()->with('success', 'Message Created');

    }


}
