<form action="{{route('car.update', ['car' => $car->id])}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name" value="{{ $car->name }}">
    <br>
    <input type="text" name="make" placeholder="enter make" value="{{ $car->make }}">
    <br>
    <input type="text" name="model" placeholder="enter model" value="{{ $car->model }}">
    <br>
    <input type="text" name="license_number" placeholder="enter license nubmer" value="{{ $car->license_number }}">
    <br>
    <input type="text" name="weight" placeholder="enter weight" value="{{ $car->weight }}">
    <br>
    <label for="">enter registration_year</label>
    <input type="date" name="registration_year" placeholder="enter registration_year" value="{{ $car->registration_year }}">

    <button type="submit">create</button>
</form>
