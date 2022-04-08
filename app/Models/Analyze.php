<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analyze extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'date',
      'url',
        'inz',
      'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
