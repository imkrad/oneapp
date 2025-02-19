<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEligibility extends Model
{
    use HasFactory;

    protected $fillable = ['name_id','user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function name()
    {
        return $this->belongsTo('App\Models\ListData', 'name_id', 'id');
    }
}
