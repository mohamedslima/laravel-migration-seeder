<h1>Treni Orari</h1>

<ul>
    @foreach ($trains as $train)
        <li>
            <h3>Partenza da: {{ $train->departure_station }}</h3>
            <h3>Arrivo a: {{ $train->arrival_station }}</h3>
            <h5>
                {{ $train->agency }}
            </h5>
            <p>Parte alle: {{ $train->departure_time }}</p>
            <p>Arriva alle: {{ $train->arrival_time }}</p>
            <p>Codice Treno: {{ $train->train_code }}</p>
            <p>Numero Carrozze: {{ $train->carriages_number }}</p>
        </li>
    @endforeach
</ul>