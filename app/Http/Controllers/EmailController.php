<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;
class EmailController extends Controller
{
    public function sendWelcomeEmail() {
        $toEmail = 'user@gmail.com';
        $message = 'Welcome to ZenDiet';
        $subject = 'Welcome Email in Laravel using Gmail';

        #Mail::to($toEmail)->send(new WelcomeEmail($message));
    }
}
