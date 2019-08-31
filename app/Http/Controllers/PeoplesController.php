<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $peoples = People::paginate(15);

        return view('peoples.index3')->with('peoples', $peoples);
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
        $person = People::find($id);
        return view('peoples.edit')->with('person', $person);
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
        $validate = $request->validate([
            'tin' => 'required|numeric',
            'phone' => 'required|numeric',
        ]);
        $person = People::find($id);
        $person->mcode = $request->input('mcode');
        $person->bname = $request->input('bname');
        $person->faddress = $request->input('faddress');
        $person->vname = $request->input('vname');
        $person->phone = $request->input('phone');
        $person->tin = $request->input('tin');
        $person->save();

        return view('success')->with('success', 'Successfully Edited')->with('person', $person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $search_term = $request->input('search');
        $results = People::where( 'bname', 'LIKE', '%' . $search_term . '%' )->orWhere( 'phone', 'LIKE', '%' . $search_term . '%' )->orWhere( 'vname', 'LIKE', '%' . $search_term . '%' )->orWhere( 'faddress', 'LIKE', '%' . $search_term . '%' )->orWhere( 'mcode', 'LIKE', '%' . $search_term . '%' )->paginate(15);
        return view('searchResult')->with('results', $results)->with('search_term', $search_term)->with('size', sizeof($results));
    }

    public function setImagePath(){
        $people = People::all();
        $size = sizeof($people);
        for($i=1;$i <= $size; $i++){
            $pl = People::find($i);
            $pl->image_path = "";
            $pl->image_path = "storage/images/" . $pl->mcode . "." . "jpg";
            $pl->save();

        }
        return "Success";
    }

    
}
