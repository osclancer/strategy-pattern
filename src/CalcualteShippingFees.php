<?php

namespace App;

use App\Shipping;
use App\Cities\City;
use App\Packages\Package;

class CalcualteShippingFees {
    protected $package;
    
    protected $company;
    
    protected $city;

    public function __construct(Package $package, Shipping $company, City $city) {
        $this->package  = $package;
        $this->company  = $company;
        $this->city     = $city;
    }

    public function setShippingCompany(Shipping $company) {
        $this->company = $company;
    }

    public function setShippingCity(City $city) {
        $this->city = $city;
    }

    public function calcualte() {
        $cityFees = $this->city->deliveryFees;
        $shippingFees = $this->company->calculateShippingFees($this->package);

        return $cityFees + $shippingFees;
    }
}
