<?php 

namespace App\Http\Controllers;

class ControllerNomes extends Controller {
    public function index() {
        return view('nomes.index');
    }
}