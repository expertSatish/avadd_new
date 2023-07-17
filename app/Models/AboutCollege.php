<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCollege extends Model
{
    use HasFactory;
    public static function saveData($dataVal, $image, $id = null)
    {
      $saveData = ($id) ? AboutCollege::find($id) : new AboutCollege;
      if ($image) : $saveData->about_image = $image;
      endif;
      $saveData->description = $dataVal->description;
      $saveData->save();
    }
  
    public static function getData($id)
    {
      return AboutCollege::where('id', $id)->delete();
    }
}
