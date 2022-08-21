<?php

namespace App\Models;

use App\Models\JobPost;
use App\Models\ApplyJob;
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

    public function applyJob()
    {
        return $this->belongsTo(ApplyJob::class, 'applyJobId', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
