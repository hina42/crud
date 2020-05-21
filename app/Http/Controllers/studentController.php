<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $data = student::all();
        return view('student',compact('data'));
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
        $std = new student;
        $std->firstname = $request->firstname;
        $std->lastname = $request->lastname;
        $std->email = $request->email;
        $std->save();

     return response()->json($std);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {     $id = request()->query('id');
        $std = student::find($id);
        return view('update',['std'=>$std]);
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
    public function update(Request $request)
    {
        $std =student::find($request->id);
        $std->firstname = $request->firstname;
        $std->lastname = $request->lastname;
        $std->email = $request->email;
        $std->update();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    { $id = request()->query('id');
      student::find($id)->delete();
      return response()->json("success");
    }
}
