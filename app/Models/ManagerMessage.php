<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerMessage extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $image, $id = null)
    {
      $saveData = ($id) ? ManagerMessage::find($id) : new ManagerMessage;
      if ($image) : $saveData->manager_image = $image;
      endif;
      $saveData->description = $dataVal->description;
      $saveData->save();
    }
  
    public static function getData($id)
    {
      return ManagerMessage::where('id', $id)->delete();
    }
}
