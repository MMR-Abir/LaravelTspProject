<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Specialist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
 public function Home(){

$doctors =Doctor::all();
$specialists =Specialist::all();


//return view('frontend.home', compact('doctors','specialists'));
//return Inertia::render('Home', ['doctors' => $doctors,'specialists' => $specialists]);
return Inertia::render('Home', compact('doctors','specialists'));

 }


public function About(){
    return Inertia::render('About');
}

public function Contact(){
    return Inertia::render('Contact');
}


}
