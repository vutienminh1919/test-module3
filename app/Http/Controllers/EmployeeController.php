<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Repositories\EmployeeRepository;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeRepository;

    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function index()
    {
        $employees = $this->employeeRepository->getAll();
        return view('employee.list', compact('employees'));
    }


    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $this->employeeRepository->create($request);
        toastr()->success('Create success !');
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = $this->employeeRepository->getById($id);
        return view('employee.edit', compact('employee'));

    }


    public function update(Request $request, $id)
    {
        $this->employeeRepository->edit($request, $id);
        toastr()->success('Update success !');
        return redirect()->route('employees.index');
    }


    public function destroy($id)
    {
        $employee = $this->employeeRepository->getById($id);
        $this->employeeRepository->delete($id);
        toastr()->success('Delete success !');
        return redirect()->route('employees.index');
    }


    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $employeeResult = Employee::query()
            ->where('name', 'LIKE', "%{$keyword}%")
            ->get();
        return view('employee.search', compact('employeeResult'));
    }

}
