<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase;
use App\Models\Hardware;
use App\Models\UserInfo;

class purchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchases = Purchase::all();
        $hardwares = Hardware::all();
        $usersinfos = UserInfo::all();
        return view('purchases', compact('purchases', 'hardwares', 'usersinfos'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hardwares = Hardware::all();
        $usersinfos = UserInfo::all();
        return view('purchases.create', compact('hardwares', 'usersinfos'));
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
           'invoice' => 'required',
           'price' => 'required',
           'hardware_id' => 'required',
           'userinfo_id' => 'required',
           'purchased_on' => 'required',
        ]);
        
       $purchase = Purchase::create([
            'invoice' => $request->invoice,
            'price' => $request->price,
            'hardware_id' => $request->hardware_id,
            'userinfo_id' => $request->userinfo_id,
            'purchased_on' => $request->purchased_on,
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
        $purchase = Purchase::find($id);
        return view('purchases.show', compact('purchase'));
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hardwares = Hardware::all();
        $usersinfos = UserInfo::all();
        $purchase = Purchase::find($id);
        return view('purchases.edit', compact('purchase'));
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
           'invoice' => 'required',
           'price' => 'required',
           'hardware_id' => 'required',
           'userinfo_id' => 'required',
           'purchased_on' => 'required',
        ]);
        
       $purchase = Purchase::where('id', $id)->update([
            'invoice' => $request->invoice,
            'price' => $request->price,
            'hardware_id' => $request->hardware_id,
            'userinfo_id' => $request->userinfo_id,
            'purchased_on' => $request->purchased_on,
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
      $purchase = Purchase::where('id', $id)->delete();
      return $this->index();
    }
}
