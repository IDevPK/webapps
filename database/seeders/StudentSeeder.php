<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $json = File::get(path:"database/json/students.json");
        $students = collect(json_decode($json));
        //get model and then insert data through it. 
        $students->each(function ($student) {
            //loop will run uptill the json files entries. 
            student::create([
                'name' => $student->name,
                'email' => $student->email,
                'city' => $student->city,
                'subject' => $student->subject,
                'percentage'=> $student->percentage,
                'age'=> $student->age,
            ]);

            //with every single entry of json file it will add 15 entries of fake data
            for( $i = 0; $i < 15; $i++ ) {
                 //this will run alongwith json loop and add some fake data
 
                student::create([
                    'name' => fake()->name(),
                    'email' => fake()->email(),
                    'city' => fake()->city(),
                    'subject' => fake()->text(5),
                    'percentage'=> fake()->numberBetween(1,100),
                    'age'=> fake()->numberBetween(10,40),
                ]);
            }
 
        });
        

        }

}

