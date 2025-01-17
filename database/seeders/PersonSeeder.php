<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class PersonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $fileContents = Storage::get('email_names.json');
        
        $jsonData = json_decode($fileContents, true);

        foreach($jsonData as $person) {
            Person::create([
                'first_name' =>  $person['first_name'],
                'last_name' =>  $person['last_name'],
                'email' =>  $person['email'],
            ]);
        }
    }
}
