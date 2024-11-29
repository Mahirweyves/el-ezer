<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'checkin' => 'required|date|after:today',
            'checkout' => 'required|date|after:checkin',  
            // 'accommodation' => 'required|in:Single,Double',
        ]);
       
        // $booking = new Booking();
        // $booking->name = $request->input('name');
        // $booking->email = $request->input('email');
        // $booking->phone = $request->input('phone');
        // $booking->checkin = $request->input('checkin');
        // $booking->checkout = $request->input('checkout');
        // $booking->accommodation = $request->input('accommodation');
        // $booking->save();

        Booking::create($request->all());

        // Additional logic or redirection after successful data storage

        return redirect()->back()->with('message', 'Thanks for booking with us...  Our team will get back to you within 24 hours.');
    }
}

