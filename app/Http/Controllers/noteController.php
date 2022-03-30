<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Purchase;

class noteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $purchases = Purchase::all();
        return view('notes', compact('notes', 'purchases'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purchases = Purchase::all();
        return view('notes.create', compact('purchases'));
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
           'note' => 'required',
           'purchase_id' => 'required',
           'service' => 'required',
        ]);
        
       $note = Note::create([
            'note' => $request->note,
            'purchase_id' => $request->purchase_id,
            'service' => $request->sales_number,
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
        $note = Note::find($id);
        return view('notes.show', compact('note'));
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchases = Purchase::all();
        $note = Note::find($id);
        return view('notes.edit', compact('note', 'purchases'));
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
           'note' => 'required',
           'purchase_id' => 'required',
           'service' => 'required',
        ]);
        
       $note = Note::where('id', $id)->update([
            'note' => $request->note,
            'purchase_id' => $request->purchase_id,
            'service' => $request->service,
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
      $note = Note::where('id', $id)->delete();
      return $this->index();
    }
}
