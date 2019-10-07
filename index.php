<?php


abstract class Transport
{
    public abstract function getFactoryTransport() : IFactoryTransport;

    public function countryTransport()
    {
        $factoryTransport = $this->getFactoryTransport();

        echo '<pre>';

        echo ('Transport->' . $factoryTransport->getFactoryTransport());
        echo ('Produce->' . $factoryTransport->getFactoryTransportProduce());
    }
}
class Car extends Transport
{
    public function getFactoryTransport(): IFactoryTransport
    {
        return new CarTransport;
    }
}
class Bicycle extends Transport
{
    public function getFactoryTransport(): IFactoryTransport
    {
        return new BicycleTransport;
    }
}
class Motorcycle extends Transport
{
    public function getFactoryTransport(): IFactoryTransport
    {
        return new MotorcycleTransport;
    }
}
class Truck extends Transport
{
    public function getFactoryTransport(): IFactoryTransport
    {
        return new TruckTransport;
    }
}
interface IFactoryTransport
{
    public function getFactoryTransport(): string;
    public function getFactoryTransportProduce(): string;
}
class CarTransport implements IFactoryTransport
{
    public function getFactoryTransport() : string
    {
        return "Car";
    }
    public function getFactoryTransportProduce() : string
    {
        return "China";
    }
}
class BicycleTransport implements IFactoryTransport
{
    public function getFactoryTransport() : string
    {
        return "bicycle";
    }
    public function getFactoryTransportProduce() : string
    {
        return "Ukraine";
    }
}
class MotorcycleTransport implements IFactoryTransport
{
    public function getFactoryTransport() : string
    {
        return "Motorcycle";
    }
    public function getFactoryTransportProduce() : string
    {
        return "Italy";
    }
}
class TruckTransport implements IFactoryTransport
{
    public function getFactoryTransport() : string
    {
        return "Truck";
    }
    public function getFactoryTransportProduce() : string
    {
        return "France";
    }
}
function countryProduce (Transport $Transport)
{
    $Transport->countryTransport();
}
countryProduce (new Car());
countryProduce (new Bicycle());
countryProduce (new Motorcycle());
countryProduce (new Truck());
