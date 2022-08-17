<?php

namespace App\Models;

use App\Models\User;
use App\Models\JobPost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApplyJob extends Model
{

    use HasFactory;
    protected $guarded = [];

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class, 'jobPost_Id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
