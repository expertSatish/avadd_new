<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Faculty extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $faculty_image, $id = null)
    {
      $saveData = ($id)? Faculty::find($id): new Faculty;
      $saveData->department_name = $dataVal->department_name;
      $saveData->description = $dataVal->description;
      $saveData->faculty_name = $dataVal->faculty_name;
      $saveData->slug = Str::slug($dataVal->department_name);
      if ($faculty_image) : $saveData->faculty_image = $faculty_image;
    endif;
      $saveData->save();
    }

    public static function getFaculty($id)
    {
      return Faculty::where('id', $id)->delete();
    }
}
