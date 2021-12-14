@extends('master')
@section('content')
    <div class="container">
        <div class="form-group">
            <form action="{{route('employees.search')}}" method="GET">
                <input class="form-control" type="text" name="keyword">
                <button class="btn btn-primary btn-block" type="submit">Search</button>
            </form>
        </div>


        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Job</th>
                <th>BirthDay</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Code</th>
                <th>Email</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <a type="button" class="btn btn-primary" href="{{route('employees.create')}}">Create new</a>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->category}}</td>
                    <td>{{$employee->birthday}}</td>
                    <td>{{$employee->gender}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->code}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->address}}</td>
                    <td><a type="button" class="btn btn-success" href="{{route('employees.edit',$employee->id)}}">Edit</a></td>
                    <td><a type="button" class="btn btn-danger" href="{{route('employees.destroy',$employee->id)}}">Delete</a></td>

                </tr>
            @endforeach
            </tbody>

        </table>
    </div>


@endsection
