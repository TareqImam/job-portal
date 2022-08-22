<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function question()
    {
        return $this->hasMany(Question::class, 'question_Id', 'id');
    }
}
