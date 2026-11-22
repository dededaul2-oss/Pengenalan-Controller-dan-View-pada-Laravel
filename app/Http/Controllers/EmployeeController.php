<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
{ 
    $pageTitle = 'Employee List'; 
 
    return view('employee.index', ['pageTitle' => $pageTitle]); 
}
    public function create() 
{ 
    $pageTitle = 'Create Employee'; 
 
    return view('employee.create', compact('pageTitle')); 
}
   public function store(Request $request) 
{ 
    $messages = [ 
        'required' => ':Attribute harus diisi.', 
        'email' => 'Isi :attribute dengan format yang benar', 
        'numeric' => 'Isi :attribute dengan angka' 
    ]; 
 
    $validator = Validator::make($request->all(), [ 
        'firstName' => 'required', 
        'lastName' => 'required', 
        'email' => 'required|email', 
        'age' => 'required|numeric', 
    ], $messages); 
 
    if ($validator->fails()) { 
        return redirect()->back()->withErrors($validator)->withInput(); 
    } 
 
    return $request->all();
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
