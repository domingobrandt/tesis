<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Employee;
use App\EmployeePosition;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= Employee::with('positions')->get();
        $positions= Position::all();
        //$relaciones= EmployeePosition::all();

        return view('employees.index', compact('employees','positions','relaciones'));   
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee= new Employee();
        $position= new Position();
        //$relacion=  new EmployeesPosition();
        
        $employee->name = $request->input('name');
        $position->name = $request->input('name2');
        //$relacion->employee_id = $request->input('employee_id');
        //$relacion->position_id = $request->input('position_id');

        $employee->save();
        $position->save();
        //$relacion->save();

        return 'saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employee.edit', compact('employee'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, employee $employee)
    {

        $employee->delete();
        return redirect()->route('employee.index')->with('status','employee Eliminado');
        //return 'deleted';
    }
}
