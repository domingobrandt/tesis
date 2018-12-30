<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Employee;
use App\EmployeePosition;
use App\Http\Requests\StorePositionRequest;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $positions= Position::with('employees')->get();
        $employees= Employee::with('positions')->get();

        return view('positions.index', compact('positions','employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $empo= Employee::pluck('name','id');

        return view('positions.create',compact('empo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePositionRequest $request)
    {
        $position= new Position();
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $namea);
        }
        $position->name = $request->input('name');
        $position->bio = $request->input('bio');
        $position->avatar = $namea; 
        $position->slug = $request->input('slug');
        $position->save();
                return redirect()->route('positions.index')->with('status','positions creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( position $position)
    {
        return view('positions.show', compact('position'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( position $position)
    {
        return view('positions.edit', compact('position'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, position $position)
    {
        $position->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $position->avatar =$namea;
            $file->move(public_path().'/images/', $namea);
        }
        $position->save();

        return redirect()->route('positions.show', [$position])->with('status','position actualizado correctament');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, position $position)
    {
        $file_path = public_path().'/images/'.$position->avatar;
        \File::delete($file_path);
        $position->delete();
        return redirect()->route('positions.index')->with('status','position Eliminado');
    }
}
