<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Goal;

class GoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals = Goal::all();
        //return view ("goals/index", compact('goals'));

        return response()->json(['goals'=>$goals], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view("goals/new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $goal = new Goal;
        $goal->name = $request->name;
        $goal->description = $request->description;
        $goal->save();
        //return redirect ("/goals");

        return response()->json(['goal' => $goal]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goal = Goal::find($id);
        //return view("goals/show", compact('goal'));

        return response()->json(['goal' => $goal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goal = Goal::find($id);
        //return view("goals/edit", compact('goal'));

        return response()->json(['goal' => $goal]);
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
        $goal = Goal::find($id);
        $goal->name = $request->name;
        $goal->description = $request->description;
        $goal->save();
        //return redirect("/goals");

        return response()->json(['goal' => $goal]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goal = Goal::find($id);
        $goal->delete();
        //return redirect("/goals");

        return response()->json(['goal' => $goal]);
    }
}
