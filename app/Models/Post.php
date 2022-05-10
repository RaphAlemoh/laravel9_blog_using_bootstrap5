<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }



    // public function created_at(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) => $value->diffForHumans(),
    //         // set: fn ($value) => $value,
    //     );
    // }
}
