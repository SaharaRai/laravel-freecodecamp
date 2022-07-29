<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = []; // removes the guarding that protects injection of diff data from user. We are using this here because we are stating the data coming in controller

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
