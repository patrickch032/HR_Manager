<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{
    public function regView(){
        return view('regEmp');
    }


    public function listView(){
        $employees = DB::select('SELECT id, firstName FROM employees');
        //dd($machines);

        $employees = Employee::all();
        //dd($machines);

        //return view('listEmp')->with('employees', $employees);
        return view('listEmp',["employees"=>$employees]);
    }

    public function destroy(Employee $employee)
    {
        $employees = Employee::all();
        $employee->delete();
        //DB::delete('DELETE * FROM employees WHERE id = ?',$employee->id);


        return redirect()->route('list.view');
        

    }

    public function edit(Employee $employee)
    {
        return view('edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->fill($request->all())->save();

        return redirect()->route('list.view')->with('success', 'aaaa');
    }
    

    public function regEmp(Request $req){
        $emp = new Employee;
        $emp->firstName=$req->firstName;
        $emp->lastName=$req->lastName;
        $emp->shift=$req->shift;
        $emp->position=$req->position;
        $emp->save();
        return view('home');
    }

 
}






