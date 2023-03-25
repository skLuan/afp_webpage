<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForAdmin;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function sendBasicForm(Request $request) {
        $projectName       = $request->input('projectName');
        $ubication         = $request->input('cityEstate') == 'United States'? $request->input('state') : $request->input('country');
        $projecDimentions = $request->input('dimentions');
        $customerName       = $request->input('name');
        $email            = $request->input('email');
        $phone              = $request->input('phone');
        $message              = $request->input('notes');

        Mail::to('erazo.luan@gmail.com')->send(new ForAdmin($projectName, $ubication, $projecDimentions, $customerName, $email, $phone, $message));
        return redirect()->back()->with('success', 'correo enviado satisfactoriamente');;
    }

    public function showHome(){
        return view('home');
    }


}
