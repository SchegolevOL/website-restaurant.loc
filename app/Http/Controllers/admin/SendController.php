<?php

namespace App\Http\Controllers\admin;

use App\Contracts\SendAd\SendMassages;
use App\Http\Controllers\Controller;
use App\Mail\BookingConfirmation;
use App\Services\SendAd\AdMail;
use App\Services\SendAd\AdTelegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class SendController extends Controller
{
    public function sendMassages(SendMassages $service){
        //$telegram = new AdTelegram($service);
        $telegram = App::make(AdTelegram::class);

        return view('admin.messages', compact('service', 'telegram'));
    }
    public function sendMail(Request $request){
        if ($request->method()==='POST'){
            Mail::to('test@test.com')->send(new BookingConfirmation());
        }
        return view('admin.jobmail');
    }
}

