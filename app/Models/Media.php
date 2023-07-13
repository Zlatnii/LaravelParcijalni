<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'year',
        'user_id',
    ];

    public function users()
    {
        $this->belongsTo(User::class);
    }

}
