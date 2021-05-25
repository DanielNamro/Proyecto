<?php

namespace App\Http\Controllers;

use App\Models\Top;
use App\Models\User;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tops = Top::all();
        return view('top.index', ['tops'=>$tops]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tops = Top::all();
        return view('top.index', ['tops' => $tops]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $rules=['orden'=>'required|integer|max:30',
        'quantity'=>'required|integer|max:3',
        'price'=>'required|max:6'];
        $request->validate($rules);*/
        $tops=Top::create($request->all());
        return redirect('/tops/request->Top');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function show(Top $top)
    {
        $coments = $top->coments()->get();
        return view('top.show',['top'=>$top, 'coments'=>$coments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $top = Top::find($id);

        return view('top.edit', ['top' => $top]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$rules=['name'=>'required|string|max:200',
        'short_name'=>'required|string|max:20'];
        $request->validate($rules);*/

        $top = Top::find($id);
        $top->update($request->all());
        return redirect('/tops');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Top  $top
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $top = Top::find($id);
        $top->delete();
        return back()->with('status', 'Modulo borrado');
    }
}
