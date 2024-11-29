<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\BookingMail;

class Booking extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'phone', 'checkin', 'checkout', 'accommodation' ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $Email = "elezerapartments@gmail.com";
            Mail::to($Email)->send(new BookingMail ($item));
        });
    }
}