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
    $joinSpacing = $data['joinSpacing'];
    $mxm = $data['mxm'];

    // ------ Suporting Structure
    $kvalue = $data['kvalue'];
    $resilienceModule = $data['resilienceModule'];
    $spt = $data['spt'];
    $ci = $data['ci'];

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

    function variableExist($variable)
    {
        if ($variable && !empty($variable)) {
            return true;
        } else {
            return false;
        }
    }
    function variablesExist($varArray)
    {
        $haveSomething = false;
        foreach ($varArray as $var) {
            if (variableExist($var)) {
                $haveSomething = true;
            }
        }
        return $haveSomething;
    }
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
        @if (variableExist($msn))
            <li><b>Mensaje: </b>{{ $msn }}</li>
        @endif
    </ul>

    @if (variablesExist([$typeofSlap, $joinSpacing]))
        <h5>Information for slab on ground</h5>
        <ul>
            <li><b>Type of Slap: </b>{{ $typeofSlap }}</li>
            <li><b>Joint Spacing: </b>{{ $joinSpacing }}</li>
            <li><b>M x M: </b>{{ $mxm }}</li>
        </ul>
    @endif

    @if (variablesExist([$kvalue, $resilienceModule, $spt, $ci]))
        <h5>Suporting Structure</h5>
        <ul>
            <li><b>K-value:</b> {{ $kvalue }} Kg/cm²</li>
            <li><b>Resilience Module: </b>{{ $resilienceModule }}</li>
            <li><b>SPT i: </b>{{ $spt }}</li>
            <li><b>ci (Kg/cm2): </b>{{ $ci }}</li>
        </ul>
    @endif

    @if (variablesExist([$fCube, $concreteShrinkage]))
        <h5>Concrete</h5>
        <ul>
            <li><b>Fck Cube: </b>{{ $fCube }} MR (kg/cm²)</li>
            <li><b>Concrete Shrinkage value: </b>{{ $concreteShrinkage }} %</li>
        </ul>
    @endif

    @if (variablesExist([$bracedRack, $supportLoad, $backToback, $rackDepth, $rackLenght, $aisleWidth, $footSupport]))
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
    @endif

    @if (variablesExist([
            $brandModel,
            $maxStaticWheelLoad,
            $tirePressure,
            $wheelConfig,
            $wheelDistanceSd,
            $wheelBasesa,
            $wheelType,
        ]))
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
    @endif

    @if (variablesExist([
            $truckMaxStaticWheelLoad,
            $trucktirePressure,
            $truckwheelConfig,
            $truckWheelDistanceSd,
            $truckWheelDistanceS,
            $truckwheelBase1,
            $truckwheelBase2,
            $truckwheelBase3,
            $truckwheelBase4,
            $truckwheelBase5,
        ]))
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
    @endif

    @if (variablesExist([$loadPerSquareMeter, $loadSeparation]))
        <h5>Uniformly distributed static loads, U.D.L.</h5>
        <ul>
            <li><b>Load per square meter: </b> {{ $loadPerSquareMeter }} KN/m²</li>
            <li><b>Load separation: </b> {{ $loadSeparation }} mm</li>
        </ul>
    @endif

    @if (variablesExist([$loadPerLinearMeter, $LoadWidth]))
        <h5>Linearly distributed static loads, L.D.L.</h5>
        <ul>
            <li><b>Load per linear meter: </b>{{ $loadPerLinearMeter }} KN/m</li>
            <li><b>Load Width: </b>{{ $LoadWidth }} mm</li>
        </ul>
    @endif

    @if (variablesExist([$mezzanineSupportLoad, $supportSpacing]))
    <h5>Mezzanine</h5>
    <ul>
        <li><b>Mezzanine support load: </b>{{ $mezzanineSupportLoad }}</li>
        <li><b>Support spacing: </b>{{ $supportSpacing }}</li>
    </ul>
    @endif
</article>
