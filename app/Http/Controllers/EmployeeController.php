<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $employees = Employee::latest()->paginate(5);

        return view('employee.index', compact('employees'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $genders= ['M', 'F'];
        return view('employee.create', compact('genders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeStoreRequest $request)
    {
        //

        Employee::create($request->validated());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
        return view('employee.show',compact('employee'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
        $genders= ['M', 'F'];
        return view('employee.edit',compact('employee', 'genders'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {
        //
        //var_dump($request);
        $employee->update($request->validated());

        // var_dump($employee);
        // die();

        return redirect()->route('employee.index')->with('success','Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();

        return redirect()->route('employee.index')->with('success','Employee deleted successfully');
    }
}
