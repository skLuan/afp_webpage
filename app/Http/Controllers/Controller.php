<?php

namespace App\Http\Controllers;

use App\Mail\ForAdmin;
use App\Mail\newProject;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $users = ['sales@americanflooringproducts.com', 'solutions@americanflooringproducts.com'];

    public function reCapcha(Request $request)
    {
        $Stoken =  $request->input('g-recaptcha-response');
        $args = [
            'secret' => env('RECAPCHA_SECRET_KEY'),
            'response' => $Stoken,
        ];
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', $args);
        // Obtener la respuesta de la API
        $responseData = $response->json();
        // Verificar si el token es válido
        if ($responseData['success']) {
            // El token de reCAPTCHA es válido, continúa con la lógica de tu aplicación
            // ...
            // ...
            return true;
        } else {
            // El token de reCAPTCHA no es válido, maneja el error apropiadamente
            // ...
            // ...
            return false;
        }
    }

    public function sendBasicForm(Request $request)
    {
        $projectName       = $request->input('projectName');
        $ubication         = $request->input('cityEstate') == 'United States' ? $request->input('state') : $request->input('country');
        $projecDimentions  = $request->input('dimentions');
        $customerName      = $request->input('name');
        $email             = $request->input('email');
        $phone             = $request->input('phone');
        $msn           = $request->input('notes');

        if ($this->reCapcha($request)) {
            Mail::to('grover.vargas@americanflooringproducts.com')->cc($this->users)->bcc('erazo.luan@gmail.com')->send(new ForAdmin($projectName, $ubication, $projecDimentions, $customerName, $email, $phone, $msn));
            // Mail::to('erazo.luan@gmail.com')->send(new ForAdmin($projectName, $ubication, $projecDimentions, $customerName, $email, $phone, $msn));
            return redirect()->back()->with('success', '#contact');
        } else {
            return redirect()->back()->with('error', '#contact');
        }
    }

    public function sendDetailedForm(Request $request)
    {
        $data = [
            'projectName'       => $request->input('projectName'),
            'ubication'         => $request->input('cityEstate') == 'United States' ? $request->input('state') : $request->input('country'),
            'projecDimentions'  => $request->input('dimentions'),
            'customerName'      => $request->input('name'),
            'email'             => $request->input('email'),
            'phone'             => $request->input('phone'),
            'msn'               => $request->input('notes'),
            // ------ Information for slab on ground
            'typeofSlap'  => is_array($request->input('slapPosition')) ? implode(', ', $request->input('slapPosition')) : $request->input('slapPosition'),
            'joinSpacing' => $request->input('slapSpace'),
            'mxm'         => $request->input('mxm'),
            // ------ Suporting Structure
            'kvalue'           => $request->input('kValue'),
            // ------ concrete
            'fc'             => $request->input('fckCube'),
            'fct'             => $request->input('fct'),
            'concreteShrinkage' => $request->input('shrinkage'),
            // ------ Pallet racking
            'bracedRack'  => $request->input('bracedrack'),
            'supportLoad' => $request->input('supportLoad'),
            'backToback'  => $request->input('zz'),
            'rackDepth'   => $request->input('xx'),
            'rackLenght'  => $request->input('yy'),
            'aisleWidth'  => $request->input('aisle'),
            'footSupportA' => $request->input('footSuportA'),
            'footSupportB' => $request->input('footSuportB'),
            // ------ FortLift Truck - Ligth vehicle
            'brandModel'         => $request->input('brand'),
            'maxStaticWheelLoad' => $request->input('staticWheel'),
            'tirePressure'       => $request->input('tirePressure'),
            'wheelConfig'        => $request->input('wheelConfig'),
            'wheelDistanceSd'    => $request->input('wheelDistance'),
            'wheelBasesa'        => $request->input('wheelBase'),
            'wheelType'          => $request->input('tireMaterial'),
            // ------- Heavy truck
            'truckMaxStaticWheelLoad' => $request->input('truckStatickWheel'),
            'trucktirePressure'       => $request->input('truckTirePressure'),
            'truckwheelConfig'        => $request->input('truckWheelConfig'),
            'truckWheelDistanceSd'    => $request->input('truckWheelDistance'),
            'truckWheelDistanceS'     => $request->input('truckWheelDS'),
            'truckwheelBase1'         => $request->input('truckWheelBaseS1'),
            'truckwheelBase2'         => $request->input('truckWheelBaseS2'),
            'truckwheelBase3'         => $request->input('truckWheelBaseS3'),
            'truckwheelBase4'         => $request->input('truckWheelBaseS4'),
            'truckwheelBase5'         => $request->input('truckWheelBaseS5'),
            // ------- Uniformly distributed static loads, U.D.L.
            'loadPerSquareMeter' => $request->input('loadPerSquare'),
            'loadSeparation'     => $request->input('loadSeparation'),

            // ------- Linearly distributed static loads, L.D.L.
            'loadPerLinearMeter' => $request->input('loadPerLinearM'),
            'LoadWidth'          => $request->input('loadX'),

            // ------- Mezzanine
            'mezzanineSupportLoad' => $request->input('mezzanineSupport'),
            'supportSpacing'       => $request->input('SupportSpacing'),
        ];


        $loc = app()->getLocale();
        if (Str::contains(url()->previous(), '/es')) {
            $loc = 'es';
        }

        if ($this->reCapcha($request)) {
            Mail::to('grover.vargas@americanflooringproducts.com')->cc($this->users)->bcc('erazo.luan@gmail.com')->send(new newProject($data));
            // Mail::to('erazo.luan@gmail.com')->send(new newProject($data));
            return redirect()->route("projectSend", ['locale' => $loc])->with('success', 'correo enviado satisfactoriamente');
        } else {
            return redirect()->back()->with('success', 'Lo siento, No pudimos comprobar tu humanidad :C');
        }

    }

    public function showProjectSend($locale)
    {
        App::setLocale($locale);
        return view('projectSend');
    }
    public function showHome($locale = 'en')
    {

        App::setLocale($locale);
        return view('home');
    }
}
