<?php

namespace App\Packages;

use App\Cities\City;
use App\Packages\Package;

class PackageBox implements Package {
    public $sendTo;

    public $weight;

    public function __construct(City $sendTo, $weight) {
        $this->sendTo   = $sendTo;
        $this->weight   = $weight;
    }
}
