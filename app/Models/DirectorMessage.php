<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectorMessage extends Model
{
    use HasFactory;
    public static function saveData($dataVal, $image, $id = null)
    {
      $saveData = ($id) ? DirectorMessage::find($id) : new DirectorMessage;
      if ($image) : $saveData->director_image = $image;
      endif;
      $saveData->description = $dataVal->description;
      $saveData->name = $dataVal->name;
      $saveData->save();
    }
  
    public static function getData($id)
    {
      return DirectorMessage::where('id', $id)->delete();
    }
}
