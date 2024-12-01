<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Appoinment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors =Doctor::all();
        return view('frontend.appoinment', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

$request->validate([
'name'=>'required',
'email'=>'required',
'phone'=>'required',
'date'=>'required',
'doctor'=>'required',
'remarks'=>'max:255',

]);

$app =new Appoinment;

$app->name=$request->name;
$app->email=$request->email;
$app->phone=$request->phone;
$app->doctor_id=$request->doctor;
$app->date=$request->date;
$app->remarks=$request->remarks;


$app->save();
return redirect()->back()->with('msg',"Successfully Appoinment Done");
    }

    /**
     * Display the specified resource.
     */
    public function show(Appoinment $appoinment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appoinment $appoinment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appoinment $appoinment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appoinment $appoinment)
    {
        //
    }
}
