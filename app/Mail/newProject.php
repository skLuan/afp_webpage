<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class newProject extends Mailable
{
    use Queueable, SerializesModels;

    // // ----- Basic Info
    // public $projectName;
    // public $ubication;
    // public $projecDimentions;
    // public $customerName;
    // public $email;
    // public $phone;
    // public $msn;

    // // ------ Information for slab on ground
    // public $typeofSlap;
    // public $SlapJoints;
    // // ------
    // public $joinSpacing;
    // public $mxm;

    // // ------ Suporting Structure
    // public $kvalue;
    // public $resilienceModule;
    // public $spt;
    // public $ci;
    // public $alfa;

    // // ------ concrete
    // public $fCube;
    // public $concreteShrinkage;

    // // ------ Pallet racking
    // public $bracedRack;
    // public $supportLoad;
    // public $backToback;
    // public $rackDepth;
    // public $rackLenght;
    // public $aisleWidth;
    // public $footSupport;

    // // ------ FortLift Truck - Ligth vehicle
    // public $brandModel;
    // public $maxStaticWheelLoad;
    // public $tirePressure;
    // public $wheelConfig;
    // public $wheelDistanceSd;
    // public $wheelBasesa;
    // public $wheelType;

    // // ------- Heavy truck
    // public $truckMaxStaticWheelLoad;
    // public $trucktirePressure;
    // public $truckwheelConfig;
    // public $truckWheelDistanceSd;
    // public $truckWheelDistanceS;
    // public $truckwheelBase1;
    // public $truckwheelBase2;
    // public $truckwheelBase3;
    // public $truckwheelBase4;
    // public $truckwheelBase5;

    // // ------- Uniformly distributed static loads, U.D.L.
    // public $loadPerSquareMeter;
    // public $loadSeparation;

    // // ------- Linearly distributed static loads, L.D.L.
    // public $loadPerLinearMeter;
    // public $LoadWidth;

    // // ------- Mezzanine
    // public $mezzanineSupportLoad;
    // public $supportSpacing;
    // public $contactPale;




    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public Array $data)
    {

    }

    public function basicInfoForm($projectName,  $ubication,  $projecDimentions,  $customerName,  $email,  $phone,  $msn)
    {
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'New Project',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mails.newProjectTemplate',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
