<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HWCategory;

class hwcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hwcategories = HWCategory::all();
        return view('hwcategories', compact('hwcategories'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hwcategories.create');
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
           'type' => 'required',
        ]);
        
       $hwcategory = HWCategory::create([
            'type' => $request->type,
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
        $hwcategory = HWCategory::find($id);
        return view('hwcategories.show',compact('hwcategory'));
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hwcategory = HWCategory::find($id);
        return view('hwcategories.edit',compact('hwcategory'));
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
            'type' => 'required',
        ]);

        $hwcategory = HWCategory::where('id',$id)->update([
            'type' => $request->type
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
        $hwcategory = HWCategory::where('id', $id)->delete();
        return $this->index();
    }
}

