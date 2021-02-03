<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'text_comment',
        'date_of_birth'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
