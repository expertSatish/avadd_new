<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisorMessage extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $image, $id = null)
    {
      $saveData = ($id) ? AdvisorMessage::find($id) : new AdvisorMessage;
      if ($image) : $saveData->advisor_image = $image;
      endif;
      $saveData->description = $dataVal->description;
      $saveData->name = $dataVal->name;
      $saveData->save();
    }

    public static function getData($id)
    {
        return AdvisorMessage::where('id', $id)->delete();
      
    }
}
