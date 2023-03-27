<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForAdmin;
use App\Mail\newProject;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function sendBasicForm(Request $request)
    {
        $projectName       = $request->input('projectName');
        $ubication         = $request->input('cityEstate') == 'United States' ? $request->input('state') : $request->input('country');
        $projecDimentions  = $request->input('dimentions');
        $customerName      = $request->input('name');
        $email             = $request->input('email');
        $phone             = $request->input('phone');
        $msn           = $request->input('notes');

        Mail::to('erazo.luan@gmail.com')->send(new ForAdmin($projectName, $ubication, $projecDimentions, $customerName, $email, $phone, $msn));
        return redirect()->back()->with('success', 'correo enviado satisfactoriamente');
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
            'typeofSlap'  => implode(', ', $request->input('slapPosition')),
            'SlapJoints'  => implode(', ', $request->input('slapJoint')),
            'joinSpacing' => $request->input('slapSpace'),
            'mxm'         => $request->input('mxm'),
            // ------ Suporting Structure
            'kvalue'           => $request->input('kValue'),
            'resilienceModule' => $request->input('resilianceModule'),
            'spt'              => $request->input('spti'),
            'ci'               => $request->input('ci'),
            'alfa'             => $request->input('alfa'),
            // ------ concrete
            'fCube'             => $request->input('fckCube'),
            'concreteShrinkage' => $request->input('shrinkage'),
            // ------ Pallet racking
            'bracedRack'  => $request->input('bracedrack'),
            'supportLoad' => $request->input('supportLoad'),
            'backToback'  => $request->input('zz'),
            'rackDepth'   => $request->input('xx'),
            'rackLenght'  => $request->input('yy'),
            'aisleWidth'  => $request->input('aisle'),
            'footSupport' => $request->input('footSuport'),
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
            'contactPale'          => $request->input('contactPale'),
        ];
        Mail::to('erazo.luan@gmail.com')->send(new newProject($data));
        return view('projectSend')->with('success', 'correo enviado satisfactoriamente');
    }

    public function showProjectSend()
    {
        return view('projectSend');
    }
    public function showHome()
    {
        return view('home');
    }
}
