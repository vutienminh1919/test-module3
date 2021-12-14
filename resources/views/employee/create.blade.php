@extends('master')
<form method="post">
    @csrf

<div class="container-fluid">
    <h1>CREATE</h1>
    <input class="form-control" type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
    @error('name')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <select name="category" class="form-control">
        <option value="Admin">Admin</option>
        <option value="Head Manager">Head Manager</option>
        <option value="Room Manager">Room Manager</option>
        <option value="Service Manager">Service Manager</option>
    </select><br>
    <input class="form-control" type="date" name="birthday" placeholder="DOB" value="{{old('birthday')}}"><br>
    @error('birthday')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <select class="form-control" name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other..</option>
    </select><br>


    <input class="form-control" type="text" name="phone" placeholder="phone" value="{{old('phone')}}"><br>
    @error('phone')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <input class="form-control" type="text" name="code" placeholder="employee code" value="{{old('code')}}"><br>
    @error('code')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <input class="form-control" type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
    @error('email')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <input class="form-control" type="text" name="address" placeholder="address" value="{{old('address')}}"><br>
    @error('address')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    <button class="btn btn-primary" type="submit">Add</button>
    <a class="btn btn-danger" href="{{route('employees.index')}}">Back</a>
</div>

</form>
