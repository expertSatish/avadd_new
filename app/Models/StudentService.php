<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class StudentService extends Model
{
    use HasFactory;
    public static function saveData($dataVal, $image, $id = null)
    {
      $saveData = ($id)? StudentService::find($id): new StudentService;
      $saveData->title = $dataVal->title;
      $saveData->short_desc = $dataVal->short_desc;
      $saveData->description = $dataVal->description;
      $saveData->slug = Str::slug($dataVal->title);
      if ($image) : $saveData->image = $image;
    endif;
      $saveData->save();
    }

    public static function StudentService($id)
    {
      $categoriesList = StudentService::find($id);
      unlink(str_replace("/StudentService_image/", "StudentService_image/",$categoriesList->image));
      $categoriesList->delete();
    }

    public static function getSeviceData()
    {
      return StudentService::get();
    }
}
