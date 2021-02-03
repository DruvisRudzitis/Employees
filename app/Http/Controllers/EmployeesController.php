<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', ['employees' => $employees]);
    }


    public function create()
    {
        return view('employees.create');
    }


    public function store(Request $request)
    {
        $employee = (new Employee())->fill($request->all());
        $employee->save();

        return redirect()->route('employees.index');
    }


    public function show(Employee $employee)
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }


    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            'employee' => $employee
        ]);
    }


    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('employees.edit', $employee);
    }


    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index');
    }

}
