<?php

namespace App\Http\Controllers;

use App\Notes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $notes = Auth::user()->notes;
        return response()->json([
           'notes' => $notes
        ],'200');
//        dd('Its Works');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'title'=>'required',
           'content'=>'required'
        ]);
       $notes = $request->user()->notes()->create([
            'title'=>$request->title,
            'content'=>\request('content')
        ]);

        return response()->json([
           'notes' =>$notes,
            'msg'  =>'Note has been Created !'
        ]);
        //
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
    public function edit($id)
    {
        //
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

        $request->valdiate([
            'title'=>'required',
            'content'=>'required'
        ]);
        $notes = $request->user()->notes()->whereId($id)->update([
            'title'=>request('title'),
            'content'=>request('content')
        ]);

        return response()->json([
            'notes' =>$notes,
            'msg'  => 'Note has been Updated !'
        ]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notes $note)
    {
        $note->delete();

        return response()->json([
            'note' => $note,
            'msg'  =>'Note has been Deleted !'
        ]);
        //
    }
}
