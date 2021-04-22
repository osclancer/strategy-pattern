<?php

namespace App\ShippingStrategies;

use App\Shipping;
use App\Packages\Package;

class UpsStrategy implements Shipping {

    private $feesPerKiligram = 5; // 5 U.S.D

    public function calculateShippingFees(Package $package) {
        $fees = $package->weight * $this->feesPerKiligram;        
        return $this->discount($fees);
    }

    private function discount($fees) { // Discount 5%
        return $fees - ($fees * 0.5);
    }
}
