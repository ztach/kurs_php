<?php
include_once __DIR__ . '/vendor/autoload.php';


use \Ztach\Game\Race;
use \Ztach\Game\Weather;
use \Ztach\Game\Speed;
use \Ztach\Game\VehicleFactory;
use \Ztach\Game\VehicleBuilder;

$speed = new Speed(40,'m/s');

echo "\nPredkosc początkowa: ". $speed->getValue() . ' ' . "\n";


$weather = new Weather();

$builder = new VehicleBuilder();

echo "\n\nSTART";

$race = new Race($weather);

$builder->setMake(VehicleFactory::CAR);

$builder->setSpeed(new Speed(143,'m/s'));
$builder->setModel('polski POLONEZ');
$race->addVehicle($builder->build());

$builder->setSpeed(new Speed(90,'m/s'));
$builder->setModel('nrd TRABANT');
$race->addVehicle($builder->build());

 

$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR,'ford mondeo',new Speed(143,'m/s')));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR,'skoda fabia',new Speed(145,'m/s')));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::CAR,'fiat punto',new Speed(140,'m/s')));

$race->addVehicle(VehicleFactory::factory(VehicleFactory::MOTOR,'honda',new Speed(240,'m/s')));
$race->addVehicle(VehicleFactory::factory(VehicleFactory::MOTOR,'suzuki',new Speed(210,'m/s')));

$race->addVehicle(VehicleFactory::factory(VehicleFactory::TRUCK,'Volvo',new Speed(110,'m/s')));


//$race->addVehicle(new Motor('habana','honda'));
//$race->addVehicle(new Truck('Tir','Volvo'));


$race->run();

 
echo "\n\nMETA\n";
