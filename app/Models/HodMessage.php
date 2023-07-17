<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HodMessage extends Model
{
    use HasFactory;
    public static function saveData($dataVal, $image, $id = null)
    {
      $saveData = ($id) ? HodMessage::find($id) : new HodMessage;
      if ($image) : $saveData->hod_image = $image;
      endif;
      $saveData->description = $dataVal->description;
      $saveData->name = $dataVal->name;
      $saveData->save();
    }

    public static function getData($id)
    {
        $categoriesList = HodMessage::find($id);
        unlink(str_replace("/hod_image/", "hod_image/",$categoriesList->hod_image));
        $categoriesList->delete();
      
    }
}
