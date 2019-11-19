<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
	public function index()
	{
        return view('employees.index');
	}
	public function create()
	{
        return view('employees.create');
	}
	public function edit($id)
	{
        return view('employees.edit');
	}
	public function store(Request $request)
	{
		 // dd($request->all()['title']);
       $employee = new Employee;
       $employee->name = $request->name;
       $employee->title = $request->title;
       $employee->address = $request->address;
       $employee->phone = $request->phone;
       $employee->salary = $request->salary;
       $employee->save();
	}
}