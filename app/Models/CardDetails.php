<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardDetails extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id',
        'email',
        'cc_number',
    ];
}