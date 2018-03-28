<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car->make ='Tata';
        $car->model ='XUV';
        $car->year ='2001';
        $this->assertTrue($car->save());
    }

    public function testUpdateCarYear()
    {
        $car = Car::all()->last();
        $car-> where('year', '2001')
            -> update(['year' => '2000']);
        $this->assertTrue($car->save());
    }

    public function testDeleteCar()
    {
        $car = Car::all()->last();
        $this->assertTrue($car->delete());
    }

    public function testCarCount()
    {
        $cars = Car::all();
        $carsCount = count($cars);
        $this->assertEquals(50,$carsCount);
        $this->assertInternalType("int",$carsCount);
    }

    public function testYear()
    {
        $car = Car::find(1);
        $year = (int) $car->Year;
        $this->assertInternalType("int",$year);
    }
}
