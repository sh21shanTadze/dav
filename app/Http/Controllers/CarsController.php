<?php

namespace App\Http\Controllers;

use App\Models\Car;
use DateTime;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){

        $cars = Car::all();
        $cars->map(function ($car) {
            $date = new DateTime($car->registration_year);
            $car['asakissxvaoba'] = date_diff($date, now());
        });
        return view('index')->with('cars', $cars);

    }

    public function add(){
        return view('add');
    }

    public function store(Request $request){
        $car = new Car();
        $car->create($request->except("_token"));
        return redirect()->route('home');
    }

    public function edit(Car $car){
        return view('edit')->with('car', $car);
    }

    public function update(Car $car, Request $request){
        $car->update($request->except("_token"));
        return redirect()->route('home');
    }

    public function delete(Car $car){
        $car->destroy($car->id);
        return redirect()->route('home');
    }
}
