<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\CardDetails;
use Illuminate\Support\Facades\DB;

class ChallengeController extends Controller
{
    // For all matching emails that exist ONCE in EACH list, return first_name, last_name, cc_number and email.
    // If an email appears more or less than once in either list it should not be returned.
    public function index()
    {
        $data = DB::table('people')
                ->join('card_details', 'people.email', '=', 'card_details.email')
                ->select('people.first_name', 'people.last_name', 'people.email', 'card_details.cc_number')
                ->get();

        return response()->json([
            'message' => 'Data validated successfully!',
            'data' => $data
        ]);
    }
}
