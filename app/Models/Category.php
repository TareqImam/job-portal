<?php

namespace App\Models;

use App\Models\JobPost;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(JobPost::class, 'categoryId', 'id');
    }
}
