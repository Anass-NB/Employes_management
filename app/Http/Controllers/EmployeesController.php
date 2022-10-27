<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //method 1
        // $employees =  DB::table('employees')->get();
        // return view("employees.index",compact("employees"));

        //method 2
        $employees = Employee::all();
        return view("employees.index")->with([
            "employees" => $employees
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("employees.createEmp");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([

        // ]);

        Employee::create($request->except("_token"));
        return redirect()->route("allemployees")->with([
            "success" => "Employe Added Successfully !"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($registration_number)
    {
        $empl = Employee::where("registration_number",$registration_number)->first();
        return view("employees.showEmp")->with([
            "employe" => $empl
        ]);
    }


    public function edit($id)
    {

        // $emp = DB::table("employees")->where("id",$id)->first();
        // return $emp;
        $employe = DB::table("employees")->where("id","=",$id)->first();
        return view("employees.editEmp",compact("employe"));
    }

    public function update(Request $request, $id)
    {
        $employe = DB::table("employees")->where("id",$id)->update([
            "registration_number" => $request->registration_number,
            "fullname" => $request->fullname,
            "depart" =>$request->depart,
            "hire_date" =>$request->hire_date,
            "phone" => $request->phone,
            "address" => $request->address,
            "city" => $request->city,
        ]);
        return redirect()->route("allemployees");
    }


    public function delete($id)
    {
        Employee::findorFail($id)->delete();
        return redirect()->route("allemployees");

        
    }
    public function destroy($id)
    {
        //
    }

    public function vacation_request($reg_number){
        $empl = Employee::where("registration_number",$reg_number)->first();
        return view("employees.vacationEmp")->with([
            "employeVacation" => $empl
        ]);

    } 

}
