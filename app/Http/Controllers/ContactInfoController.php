<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\Note;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $contactinfos = ContactInfo::all();
        return view('contactinfos', compact('contactinfos', 'notes'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notes = Note::all();
        return view('contactinfos.create', compact('notes'));
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
           'owner' => 'required',
           'info' => 'required',
           'email' => 'required',
           'note_id' => 'required',
        ]);
        
       $contactinfo = ContactInfo::create([
           'owner' => $request->owner,
           'info' => $request->info,
           'email' => $request->email,
           'note_id' => $request->notes,
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
        $contactinfo = ContactInfo::find($id);
        return view('contactinfos.show', compact('contactinfo'));
    }
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notes = Note::all();
        $contactinfo = ContactInfo::find($id);
        return view('contactinfos.edit', compact('contactinfo', 'notes'));
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
            'owner' => 'required',
            'info' => 'required',
            'email' => 'required',
            'note_id' => 'required',
        ]);

        $contactinfo = ContactInfo::where('id',$id)->update([
            'owner' => $request->owner,
            'info' => $request->info,
            'email' => $request->email,
            'note_id' => $request->notes,
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
        $contactinfo = ContactInfo::where('id', $id)->delete();
        return $this->index();
    }
}
