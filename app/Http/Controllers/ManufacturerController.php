<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manufacturer;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = Manufacturer::all();
        return view('manufacturers', compact('manufacturers'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validated = $request->validate([ 
           'company' => 'required',
           'sales_email' => 'required',
           'sales_number' => 'required',
           'tech_email' => 'required',
           'tech_number' => 'required',
        ]);
        
       $manufacturer = Manufacturer::create([
            'company' => $request->company,
            'sales_email' => $request->sales_email,
            'sales_number' => $request->sales_number,
            'tech_email' => $request->tech_email,
            'tech_number' => $request->tech_number,
        ]);
        
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $manufacturer = Manufacturer::find($id);
        return view('manufacturers.show',compact('manufacturer'));
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufacturer = Manufacturer::find($id);
        return view('manufacturers.edit',compact('manufacturer'));
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
        $validated = $request->validate([ 
           'company' => 'required',
           'sales_email' => 'required',
           'sales_number' => 'required',
           'tech_email' => 'required',
           'tech_number' => 'required',
        ]);
        
       $manufacturer = Manufacturer::where('id', $id)->update([
            'company' => $request->company,
            'sales_email' => $request->sales_email,
            'sales_number' => $request->sales_number,
            'tech_email' => $request->tech_email,
            'tech_number' => $request->tech_number,
        ]);
        
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $manufacturer = Manufacturer::where('id', $id)->delete();
      return $this->index();
    }
}
