<h1><a href="{{ route('add.car') }}">manqanis damateba</a></h1>

<h2>chamonatvali </h2>
@if(isset($cars))
    @foreach($cars as $car)

        <h2>{{ $car->name }}</h2>
        <h3>make</h3>
        <h4>{{ $car->make }}</h4>
        <h3>model</h3>
        <h4>{{ $car->model }}</h4>
        <h3>license_number</h3>
        <h4>{{ $car->license_number }}</h4>
        <h3>weight</h3>
        <h4>{{ $car->weight }}</h4>
        <h3>registration_year</h3>
        <h4>{{ $car->registration_year }}</h4>
        <h3>asaki</h3>
        <h4>{{ $car->asakissxvaoba->y }}</h4>
        <h3>redaqtireba</h3>
        <br>
        <a href="{{route('edit.car',['car' => $car->id])}}">daediteba</a>
        <h3>washla</h3>
        <form action="{{route('car.delete',['car' => $car->id])}}" method="POSt">
            @csrf
            <button type="submit">washla</button>
        </form>
        <hr>
    @endforeach
@endif
