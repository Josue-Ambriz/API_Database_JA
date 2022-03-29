<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;
use App\Models\HWCategory;
use App\Models\Manufacturer;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hardware = Hardware::all();
        $hwcategories = HWCategory::all();
        $manufacturers = Manufacturer::all();
        return view('hardware', compact('hardware', 'hwcategories', 'manufacturers'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hwcategories = HWCategory::all();
        $manufacturers = Manufacturer::all();
        return view('hardware.create', compact('hwcategories', 'manufacturers'));
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
           'name' => 'required',
           'hwcategory_id' => 'required',
           'cpu' => 'required',
           'ram' => 'required',
           'storage' => 'required',
           'software' => 'required',
           'manufacturer_id' => 'required',
        ]);
        
       $hardware = Hardware::create([
            'name' => $request->name,
            'hwcategory_id' => $request->hwcategory_id,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'software' => $request->software,
            'manufacturer_id' => $request->manufacturer_id,        
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
        $hardware = Hardware::find($id);
        return view('hardware.show', compact('hardware'));
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hwcategories = HWCategory::all();
        $manufacturers = Manufacturer::all();
        $hardware = Hardware::find($id);
        return view('hardware.edit', compact('hardware', 'hwcategories', 'manufacturers'));
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
           'name' => 'required',
           'hwcategory_id' => 'required',
           'cpu' => 'required',
           'ram' => 'required',
           'storage' => 'required',
           'software' => 'required',
           'manufacturer_id' => 'required',
        ]);
        
       $hardware = Hardware::where('id', $id)->update([
            'name' => $request->name,
            'hwcategory_id' => $request->hwcategory_id,
            'cpu' => $request->cpu,
            'ram' => $request->ram,
            'storage' => $request->storage,
            'software' => $request->software,
            'manufacturer_id' => $request->manufacturer_id,        
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
        $hardware = Hardware::where('id', $id)->delete();
        return $this->index();
        
    }
}
