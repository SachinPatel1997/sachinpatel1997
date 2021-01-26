<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laptop;
use Illuminate\Support\Facades\Validator;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //  $laptops = Laptop::all();
          $laptops = Laptop::all();
        return view('laptops.list')->with(compact('laptops'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('laptops.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
           $request->validate([
           'name' => 'required',
           'email' => 'required',
           'phone' => 'required',
        ]);          
          
    
        Laptop::create($request->all());
        $request->session()->flash('msg',"insert into succesfully");
        return redirect('laptops');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        //
          return view('laptops.edit',compact('laptop'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $request->validate([
           'name' => 'required',
           'email' => 'required',
           'phone' => 'required', 
        ]);
        
        $request->session()->flash('msg',"Update Data into succesfully");
        return redirect('laptops');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop,Request $request,$id)
    {
        //
          $laptops = Laptop::findOrFail($id);
        $laptops->delete($id);
        $request->session()->flash('msg',"Delete Data  succesfully");
        return redirect('laptops');

    }
}
