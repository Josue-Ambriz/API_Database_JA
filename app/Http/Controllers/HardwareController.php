<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;
use App\Models\HWCategory;
use App\Models\Manufacturer;
use App\Models\Note;
use App\Models\User;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hwcategories = HWCategory::all();
        $manufacturers = Manufacturer::all();
        $notes = Note::all();
        $usersinfos = User::all();
        $hardwares = Hardware::all();
        return view('hardwares', compact('hardwares', 'hwcategories', 'manufacturers', 'notes', 'usersinfos'));
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
        $usersinfos = User::all();
        return view('hardwares.create', compact('hwcategories', 'manufacturers', 'usersinfos'));
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
           'manufacturer_id' => 'required',
           'hwcategory_id' => 'required',
           'name' => 'required',
           'CPU' => 'required',
           'RAM' => 'required',
           'storage' => 'required',
           'software' => 'required',
           'invoice' => 'required',
           'price' => 'required',
           'purchased_on' => 'required',
        ]);
        
       $hardware = Hardware::create([
            'name' => $request->name,
            'hwcategory_id' => $request->hwcategory_id,
            'CPU' => $request->cpu,
            'RAM' => $request->ram,
            'storage' => $request->storage,
            'software' => $request->software,
            'manufacturer_id' => $request->manufacturer_id,     
             
        if($request['user_id'] != "") {
            $hardwares->users()->attach($request['user_id']);
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
        return view('hardwares.show', compact('hardware'));
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
        $usersinfos = User::all();
        return view('hardwares.create', compact('hwcategories', 'manufacturers', 'usersinfos'));
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
           'manufacturer_id' => 'required',
           'hwcategory_id' => 'required',
           'name' => 'required',
           'CPU' => 'required',
           'RAM' => 'required',
           'storage' => 'required',
           'software' => 'required',
           'invoice' => 'required',
           'price' => 'required',
           'purchased_on' => 'required',
        ]);
        
       $hardware = Hardware::create([
           'manufacturer_id' => $request->manufacturer_id,   
           'hwcategory_id' => $request->hwcategory_id,
           'name' => $request->name,
           'CPU' => $request->CPU,
           'RAM' => $request->RAM,
           'storage' => $request->storage,
           'software' => $request->software,
           'invoice' => $request->invoice,
           'price' => $request->price,
           'purchased_on' => $request->purchased_on,
           
        if($request['user_id'] != "") {
            $hardwares->users()->attach($request['user_id']);
        ]);
        
        return $this->index();
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
