<?php

use App\Cities\Aswan;
use App\Cities\Cairo;
use App\Packages\PackageBox;
use App\CalcualteShippingFees;
use App\ShippingStrategies\UpsStrategy;
use App\ShippingStrategies\FedExStrategy;

require 'vendor/autoload.php';

// Shipping To Cairo with FedEx company
$cairoCity          = new Cairo; 
$packageBox         = new PackageBox($cairoCity, 10);
$fedexCompany       = new FedExStrategy;


$shippingOperation  = new CalcualteShippingFees($packageBox, $fedexCompany, $cairoCity);


echo "The Shipping To Cairo with FedEx will Coast : " . $shippingOperation->calcualte() . "$ <br/>";

// Shipping To Aswan with UPS company
$aswanCity          = new Aswan;
$upsCompany         = new UpsStrategy;

$shippingOperation->setShippingCity($aswanCity);
$shippingOperation->setShippingCompany($upsCompany);


echo "The Shipping To Aswan with UPS will Coast : " . $shippingOperation->calcualte() . "$ <br/>";