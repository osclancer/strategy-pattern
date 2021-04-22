<?php

namespace App\ShippingStrategies;

use App\Shipping;
use App\Packages\Package;

class FedExStrategy implements Shipping {

    private $feesPerKiligram = 3; // 3 U.S.D

    public function calculateShippingFees(Package $package) {
        return $package->weight * $this->feesPerKiligram;
    }
}
