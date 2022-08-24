<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantAnswer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_Id', 'id');
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_Id', 'id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_Id', 'id');
    }
}
