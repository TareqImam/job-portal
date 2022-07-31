<?php

namespace App\Models;

use App\Models\JobPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class, 'jobPostId', 'id');
    }
}
