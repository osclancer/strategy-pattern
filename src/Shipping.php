<?php

namespace App;

use App\Packages\Package;

interface Shipping {
    public function calculateShippingFees(Package $package);
}
