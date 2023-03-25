<article>
    <h3>Armor fiber new Lead!</h3>
    <ul>
        <li><b>Customer's, company name: </b>{{ $customerName }}</li>
        <li><b>Email: </b>{{ $email }}</li>
        <li><b>Telefono: </b>{{ $phone }}</li>
        <p>--------------------------------------</p>
        <li><b>Project name: </b>{{ $projectName }}</li>
        <li><b>Ubicación: </b>{{ $ubication }}</li>
        <li><b>Proyect dimentions in m²: </b>{{ $projecDimentions }}</li>
        @if ($msn && !empy($msn))
        <li><b>Mensaje: </b>{{ $msn }}</li>
        @endif
    </ul>
</article>
