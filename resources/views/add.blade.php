<form action="{{route('car.create')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name">
    <br>
    <input type="text" name="make" placeholder="enter make">
    <br>
    <input type="text" name="model" placeholder="enter model">
    <br>
    <input type="text" name="license_number" placeholder="enter license nubmer">
    <br>
    <input type="text" name="weight" placeholder="enter weight">
    <br>
    <label for="">enter registration_year</label>
    <input type="date" name="registration_year" placeholder="enter registration_year">

    <button type="submit">create</button>
</form>
