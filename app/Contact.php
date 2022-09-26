<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    public $guarded = [];

    public function sendNotificationEmail(){
        Mail::to( config('mail.nofication_recipient')) 
                ->queue( new ContactFormSubmission( $this));
    }
}
