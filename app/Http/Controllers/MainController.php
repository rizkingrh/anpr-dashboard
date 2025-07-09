<?php
namespace App\Http\Controllers;

use App\History;
use App\Tenant;

class MainController extends Controller {
    public function tespage() {
        return view('tespage');
    }
}