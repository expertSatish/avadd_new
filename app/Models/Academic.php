<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Academic extends Model
{
  use HasFactory;
  public static function saveData($dataVal, $id = null)
  {
    $saveData = ($id) ? Academic::find($id) : new Academic;

    $saveData->academic_name = $dataVal->academic_name;
    $saveData->slug = Str::slug($dataVal->academic_name);
    $saveData->description = $dataVal->description;
    $saveData->save();
  }

  public static function getBanner($id)
  {
    return Academic::where('id', $id)->delete();
  }

  public static function getAcademic()
  {
    return Academic::get();
  }
}
