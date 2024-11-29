<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index()
    {
        return view('navbar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            // 'accomodation' => 'required'
        ]);
       
        // $booking = new Booking();
        // $booking->name = $request->input('name');
        // $booking->email = $request->input('email');
        // $booking->phone = $request->input('phone');
        // $booking->checkin = $request->input('checkin');
        // $booking->checkout = $request->input('checkout');
        // $booking->accomodation = $request->input('accomodation');
        // $booking->save();
        
        Booking::create($request->all());

        // Additional logic or redirection after successful data storage

        return redirect()->back()->with('success', 'Thanks for booking with us...  Our team will get back to you within 24 hours.');
    }
}
