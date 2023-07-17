<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'images',
        'title',
        'description',
    ];

    public static function getData($id)
    {
        return Event::where('id', $id)->delete();
      
    }
}
