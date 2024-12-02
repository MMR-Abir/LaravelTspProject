<?php

namespace App\Http\Controllers\backend;

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

        $appoinments =Appoinment::orderBy('id')->get();
       return view('backend.appoinment.index',compact('appoinments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
         $doctors =Doctor::all();
        return view('backend.appoinment.edit',compact('appoinment','doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appoinment $appoinment)
    {
        $request->validate([
        'name'=>'required',
        'email'=>'required',
         'phone'=>'required',
         'doctor'=>'required',
         'date'=>'required',
         'status'=>'required',


        ]);


        $appoinment->name =$request->name;
        $appoinment->email =$request->email;
        $appoinment->phone =$request->phone;
        $appoinment->doctor_id =$request->doctor;
        $appoinment->date =$request->date;
        $appoinment->remarks =$request->name;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appoinment $appoinment)
    {
        $appoinment->delete();
        return redirect()->route('appoinment.index')->with('msg','Deleted Successfully');
    }

    public function changeStatus($id)
    {
       $record =Appoinment::find($id);
       $record->status=='pending' ? $record->status = 'confirmed': $record->status ='pending';

       $record->update();
       return redirect()->back();



    }

}
