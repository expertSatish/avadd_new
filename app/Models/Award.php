<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;
    
    public static function saveData($dataVal, $awards, $user_id, $id = null)
    {
      $saveData = ($id) ? Award::find($id) : new Award;
      if ($awards) : $saveData->image = $awards;
      endif;
      $saveData->user_id = $user_id;
      $saveData->title = $dataVal->title;
      $saveData->description = $dataVal->description;
      $saveData->save();
    }
  
    public static function getBanner($id)
    {
      return Award::where('id', $id)->delete();
    }
}
