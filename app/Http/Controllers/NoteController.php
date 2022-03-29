<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Hardware;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Notes::all();
        $hardwares = Hardware::all();
        return view('notes', compact('notes', 'hardwares'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hardwares = Hardware::all();
        return view('notes.create', compact('hardwares'));
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
           'hardware_id' => 'required',
           'service' => 'required',
        ]);
        
       $manufacturer = Manufacturer::create([
            'note' => $request->note,
            'hardware_id' => $request->hardware_id,
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
        return view('notes.show',compact('note'));
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
        $note = Note::find($id);
        return view('notes.edit',compact('note', 'hardwares'));
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
           'hardware_id' => 'required',
           'service' => 'required',
        ]);
        
       $note = Note::where('id', $id)->update([
            'note' => $request->note,
            'hardware_id' => $request->hardware_id,
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
