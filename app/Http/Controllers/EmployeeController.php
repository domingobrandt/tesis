<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Position;
use App\Employee;
use App\EmployeePosition;
use App\Http\Requests\StoreEmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
    public function create(Request $request)
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
    public function store(StoreEmployeeRequest $request)
    {
        $employee= new Employee();
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $namea);
        }
        $employee->name = $request->input('name');
        $employee->bio = $request->input('bio');
        $employee->avatar = $namea; 
        $employee->slug = $request->input('slug');
        $employee->save();


        return redirect()->route('employees.index')->with('status','employee creado');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( employee $employee)
    {        $posi= Position::pluck('name','id');

        return view('employees.show', compact('employee','posi'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employees.edit', compact('employee','posi'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee )
    {
        $employee->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $namea = time().$file->getClientOriginalName();
            $employee->avatar =$namea;
            $file->move(public_path().'/images/', $namea);
        }
        $employee->save();

        return redirect()->route('employees.show', [$employee])->with('status','employee actualizado correctament');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, employee $employee)
    {
        $file_path = public_path().'/images/'.$employee->avatar;
        \File::delete($file_path);
        $employee->delete();
        return redirect()->route('employees.index')->with('status','employee Eliminado');
        //return 'deleted';
    }
}