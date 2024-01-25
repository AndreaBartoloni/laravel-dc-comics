<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fumetti;


class PageController extends Controller
{
    public function index(){
        $fumetti = Fumetti::all();
        return view('home', ['fumetti' => $fumetti]);
    }
}
