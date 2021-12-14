<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();
        $employee->category = 'Admin';
        $employee->name = 'Vu Tien Minh';
        $employee->birthday = '1996-09-24';
        $employee->gender = 'Male';
        $employee->phone = '0382227161';
        $employee->code = '123456789';
        $employee->email = 'minh@gmail.com';
        $employee->address = 'Linh Nam';
        $employee->save();

        $employee = new Employee();
        $employee->category = 'Admin';
        $employee->name = 'Vu Tien Phuong';
        $employee->birthday = '1995-09-24';
        $employee->gender = 'Female';
        $employee->phone = '0382227162';
        $employee->code = '123456788';
        $employee->email = 'phuong@gmail.com';
        $employee->address = 'Linh Nam';
        $employee->save();

    }
}
