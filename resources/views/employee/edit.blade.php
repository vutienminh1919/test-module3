@extends('master')


<div class="container" style="margin-left: 30%">
    <h1> EDIT</h1>
    <form method="post">
        @csrf

        <input style="width: 500px" class="form-control" type="text" name="name" placeholder="Name" value="{{$employee->name}}"><br>
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror

        <select style="width: 500px" name="category" class="form-control">
            <option value="Admin">Admin</option>
            <option value="Head Manager">Head Manager</option>
            <option value="Room Manager">Room Manager</option>
            <option value="Service Manager">Service Manager</option>
        </select><br>
        <input class="form-control" type="date" name="birthday" placeholder="DOB" value="{{$employee->birthday}}"><br>
        @error('birthday')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <select style="width: 500px" name="gender" class="form-control">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other..</option>
        </select><br>


        <input style="width: 500px" class="form-control" type="text" name="phone" placeholder="phone" value="{{$employee->phone}}"><br>
        @error('phone')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input style="width: 500px" class="form-control" type="text" name="code" placeholder="employee code" value="{{$employee->code}}"><br>
        @error('code')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input style="width: 500px" class="form-control" type="text" name="email" placeholder="email" value="{{$employee->email}}"><br>
        @error('email')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input style="width: 500px" class="form-control" type="text" name="address" placeholder="address" value="{{$employee->address}}"><br>
        @error('address')
        <p class="text-danger">{{ $message }}</p>
        @enderror

        <button class="btn btn-success" type="submit">Edit</button>
        <a class="btn btn-danger" href="{{route('employees.index')}}">Back</a>
    </form>
</div>


