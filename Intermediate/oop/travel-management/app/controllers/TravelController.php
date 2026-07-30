<?php 
namespace App\Controllers;

use App\Models\Travel;

class TravelController {
    public function index() {
        $travel = new Travel();
        echo $travel->getPackages();
    }
}

















