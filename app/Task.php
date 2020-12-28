<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];
    //$guarded는 반대

    public function user() {
        return $this->belongsTo(User::class);
    }
}
