<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForAdmin;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function sendForm($name, $email, $phone, $message) {
        // Mail::to('erazo.luan@gmail.com')->send(new ForAdmin($name, $email, $phone, $message));
        return response()->json(['body' => 'succeeesss hpta!']);
    }

    public function showHome(){
        return view('home');
    }
}
