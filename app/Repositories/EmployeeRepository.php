<?php

namespace App\Repositories;


use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeRepository extends BaseRepository
{
    public function __construct(Employee $employee)
    {
        parent::__construct($employee);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'category' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'code' => 'required|min:6',
            'phone' => 'required|min:8',
            'email' => 'required|unique',
            'address' => 'required'
        ]);
        $data = $request->all();
        $data['category'] = $request->input('category');
        $data['gender'] = $request->input('gender');
        $employee = Employee::create($data);
        return $employee;
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'category' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'code' => 'required|min:6',
            'phone' => 'required|min:8',
            'email' => 'required',
            'address' => 'required'
        ]);
        $employee = Employee::findOrFail($id);
        $data = $request->only('name','category','birthday','gender','phone','code','email','address');

        $data['category'] = $request->input('category');
        $data['gender'] = $request->input('gender');
        return Employee::where('id', '=', $id)->update($data);
    }
}
