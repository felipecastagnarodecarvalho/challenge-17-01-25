<?php

namespace Database\Seeders;

use App\Models\CardDetails;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CardDetailsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $fileContents = Storage::get('email_numbers.json');
        
        $jsonData = json_decode($fileContents, true);

        foreach($jsonData as $cardDeital) {
            CardDetails::create([
                'cc_number' =>  $cardDeital['cc_number'],
                'email' =>  $cardDeital['email'],
            ]);
        }
    }
}
