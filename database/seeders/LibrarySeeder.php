<?php

namespace Database\Seeders;

use App\Models\liberary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:"database/json/liberary.json");
        $lib = collect(json_decode($json));

        $lib->each(function ($lib) {
        
            liberary::create([
                'stu_id'=>$lib->stu_id,
                'book'=> $lib->book,
                'status' => $lib->status
            ]);
            
        });
        //
    }
}
