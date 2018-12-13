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
        $positions= Position::with('employees')->get();
        //$relaciones= EmployeePosition::all();
        return view('employees.index', compact('employees','positions'));   
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posi= Position::pluck('name','id');

        return view('employees.create',compact('posi'));
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
        //$position= new Position();
        //$relacion=  new EmployeesPosition();
        
        $employee->name = $request->input('name');
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $namea);
        }
        $empresa->name = $request->input('name');
        $empresa->bio = $request->input('bio');
        $empresa->avatar = $namea; 
        $empresa->slug = $request->input('slug');
        //$position->name = $request->input('name2');
        $employee->save();
        //$position->save();
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
        
        $employee = Employee::findOrFail($id);
        $employee->name = $request->get('name');
        $employee->bio = $request->get('bio');
        $employee->slug = $request->get('slug');

        $infoJunta->save();
        return redirect()->route('employee.show');

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