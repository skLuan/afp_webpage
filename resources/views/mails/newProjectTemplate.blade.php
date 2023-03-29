@php
    // ----- Basic Info
    $projectName = $data['projectName'];
    $ubication = $data['ubication'];
    $projecDimentions = $data['projecDimentions'];
    $customerName = $data['customerName'];
    $email = $data['email'];
    $phone = $data['phone'];
    $msn = $data['msn'];

    // ------ Information for slab on ground
    $typeofSlap = $data['typeofSlap'];
    $SlapJoints = $data['SlapJoints'];
    $joinSpacing = $data['joinSpacing'];
    $mxm = $data['mxm'];

    // ------ Suporting Structure
    $kvalue = $data['kvalue'];
    $resilienceModule = $data['resilienceModule'];
    $spt = $data['spt'];
    $ci = $data['ci'];
    $alfa = $data['alfa'];

    // ------ concrete
    $fCube = $data['fCube'];
    $concreteShrinkage = $data['concreteShrinkage'];

    // ------ Pallet racking
    $bracedRack = $data['bracedRack'];
    $supportLoad = $data['supportLoad'];
    $backToback = $data['backToback'];
    $rackDepth = $data['rackDepth'];
    $rackLenght = $data['rackLenght'];
    $aisleWidth = $data['aisleWidth'];
    $footSupport = $data['footSupport'];

    // ------ FortLift Truck - Ligth vehicle
    $brandModel = $data['brandModel'];
    $maxStaticWheelLoad = $data['maxStaticWheelLoad'];
    $tirePressure = $data['tirePressure'];
    $wheelConfig = $data['wheelConfig'];
    $wheelDistanceSd = $data['wheelDistanceSd'];
    $wheelBasesa = $data['wheelBasesa'];
    $wheelType = $data['wheelType'];

    // ------- Heavy truck
    $truckMaxStaticWheelLoad = $data['truckMaxStaticWheelLoad'];
    $trucktirePressure = $data['trucktirePressure'];
    $truckwheelConfig = $data['truckwheelConfig'];
    $truckWheelDistanceSd = $data['truckWheelDistanceSd'];
    $truckWheelDistanceS = $data['truckWheelDistanceS'];
    $truckwheelBase1 = $data['truckwheelBase1'];
    $truckwheelBase2 = $data['truckwheelBase2'];
    $truckwheelBase3 = $data['truckwheelBase3'];
    $truckwheelBase4 = $data['truckwheelBase4'];
    $truckwheelBase5 = $data['truckwheelBase5'];

    // ------- Uniformly distributed static loads, U.D.L.
    $loadPerSquareMeter = $data['loadPerSquareMeter'];
    $loadSeparation = $data['loadSeparation'];

    // ------- Linearly distributed static loads, L.D.L.
    $loadPerLinearMeter = $data['loadPerLinearMeter'];
    $LoadWidth = $data['LoadWidth'];

    // ------- Mezzanine
    $mezzanineSupportLoad = $data['mezzanineSupportLoad'];
    $supportSpacing = $data['supportSpacing'];
    $contactPale = $data['contactPale'];

@endphp
<article>
    <h3>New project Lead!</h3>
    <ul>
        <li><b>Customer's, company name: </b>{{ $customerName }}</li>
        <li><b>Email: </b>{{ $email }}</li>
        <li><b>Telefono: </b>{{ $phone }}</li>
        <p>--------------------------------------</p>
        <li><b>Project name: </b>{{ $projectName }}</li>
        <li><b>Ubicación: </b>{{ $ubication }}</li>
        <li><b>Proyect dimentions in m²: </b>{{ $projecDimentions }}</li>
        @if ($msn && !empty($msn))
            <li><b>Mensaje: </b>{{ $msn }}</li>
        @endif
    </ul>

    <h5>Information for slab on ground</h5>
    <ul>
        <li><b>Type of Slap: </b>{{ $typeofSlap }}</li>
        <li><b>Slap Joints: </b>{{ $SlapJoints}}</li>
        <li><b>Joint Spacing: </b>{{ $joinSpacing }}</li>
        <li><b>M x M: </b>{{ $mxm }}</li>
    </ul>

    <h5>Suporting Structure</h5>
    <ul>
        <li><b>K-value:</b> {{ $kvalue }} Kg/cm²</li>
        <li><b>Resilience Module: </b>{{ $resilienceModule }}</li>
        <li><b>SPT i: </b>{{ $spt }}</li>
        <li><b>ci (Kg/cm2): </b>{{ $ci }}</li>
        <li><b>Ø i (º): </b>{{ $alfa }}</li>
    </ul>

    <h5>Concrete</h5>
    <ul>
        <li><b>Fck Cube: </b>{{ $fCube }} MR (kg/cm²)</li>
        <li><b>Concrete Shrinkage value: </b>{{ $concreteShrinkage }} %</li>
    </ul>

    <h5>Pallet racking, Static Point load</h5>
    <ul>
        <li><b>Braced rack: </b>{{ $bracedRack }}</li>
        <li><b>Support Load: </b>{{ $supportLoad }} KN</li>
        <li><b>Back-to-back: </b>{{ $backToback }} mm</li>
        <li><b>Rack depth: </b>{{ $rackDepth }} mm</li>
        <li><b>Rack length: </b>{{ $rackLenght }} mm</li>
        <li><b>Aisle width: </b>{{ $aisleWidth }} mm</li>
        <li><b>Foot support dimensions: </b>{{ $footSupport }} mm</li>
    </ul>

    <h5>FortLift Truck - Ligth vehicle</h5>
    <ul>
        <li><b>Brand/model: </b>{{ $brandModel }}</li>
        <li><b>Maximum Static Wheel Load: </b>{{ $maxStaticWheelLoad }} KN</li>
        <li><b>Tire (inflation): </b>{{ $tirePressure }}</li>
        <li><b>Wheel Configuration: </b>{{ $wheelConfig }}</li>
        <li><b>Wheel Distance Sd: </b>{{ $wheelDistanceSd }} mm</li>
        <li><b>Wheelbase sa: </b>{{ $wheelBasesa }} mm</li>
        <li><b>Wheel type: </b>{{ $wheelType }}</li>
    </ul>

    <h5>Heavy truck</h5>
    <ul>
        <li><b>Maximum Static Wheel Load: </b>{{ $truckMaxStaticWheelLoad }} KN</li>
        <li><b>Tire (inflation): </b>{{ $trucktirePressure }} MPa</li>
        <li><b>Wheel Configuration: </b>{{ $truckwheelConfig }}</li>
        <li><b>Wheel distance Sd: </b>{{ $truckWheelDistanceSd }} mm</li>
        <li><b>Wheel distance S: </b>{{ $truckWheelDistanceS }} mm</li>
        <li><b>Wheel base S1: </b>{{ $truckwheelBase1 }} mm</li>
        <li><b>Wheel base S2: </b>{{ $truckwheelBase2 }} mm</li>
        <li><b>Wheel base S3: </b>{{ $truckwheelBase3 }} mm</li>
        <li><b>Wheel base S4: </b>{{ $truckwheelBase4 }} mm</li>
        <li><b>Wheel base S5: </b>{{ $truckwheelBase5 }} mm</li>
    </ul>

    <h5>Uniformly distributed static loads, U.D.L.</h5>
    <ul>
        <li><b>Load per square meter: </b> {{ $loadPerSquareMeter }} KN/m²</li>
        <li><b>Load separation: </b> {{ $loadSeparation }} mm</li>
    </ul>

    <h5>Linearly distributed static loads, L.D.L.</h5>
    <ul>
        <li><b>Load per linear meter: </b>{{ $loadPerLinearMeter }} KN/m</li>
        <li><b>Load Width: </b>{{ $LoadWidth }} mm</li>
    </ul>
    <h5>Mezzanine</h5>
    <ul>
        <li><b>Mezzanine support load: </b>{{ $mezzanineSupportLoad }}</li>
        <li><b>Support spacing: </b>{{ $supportSpacing }}</li>
        <li><b>Contact plate or supporting foot: </b>{{ $contactPale }}</li>
    </ul>
</article>
