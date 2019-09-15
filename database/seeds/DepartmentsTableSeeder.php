<?php

use Illuminate\Database\Seeder;
use App\Department;
use App\Employee;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(Department::class,5)->create();
        factory(Department::class, 8)->create()->each(function($employeeDepartment) {
        	$employeeDepartment->employees()
        					   ->saveMany(
        					   		factory(Employee::class, rand(5,10))->make()
        					   );
        });
    }
}