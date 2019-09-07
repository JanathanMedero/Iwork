<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\EmployeeRequest;
use App\Employee;
use App\Job;
use Auth;
use DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $collection = Employee::all();

        $employees = $collection->reverse();

        return view('employees.index', compact('employees', 'user'));
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
    public function store(EmployeeRequest $request)
    {

        $user = Auth::user();

        $slug = Str::slug($request->name, '-');

        if (Employee::where('slug', $slug)->exists()) {
            $slug = $slug.'-'.uniqid();
        }

        try{ DB::beginTransaction(); 

            $employee = Employee::create([
                    'user_id' => $user->id,
                    'name' => $request->name,
                    'slug' => $slug,
                    'age' => $request->age
                ]);

            Job::create([
                'employee_id' => $employee->id,
                'job' => $request->job,
                'salary' => $request->salary,
                'time_in_the_company' => $request->time
            ]);

            DB::commit();

            return redirect()->route('Employee.index')->with('success', 'Empleado creado correctamente');

            }catch(\Exception $e){
                DB::rollback();
                dd($e);
            }


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
        //
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
}
