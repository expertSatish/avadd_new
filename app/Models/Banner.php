<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $banner, $user_id, $id = null)
    {
      $saveData = ($id) ? Banner::find($id) : new Banner;
      if ($banner) : $saveData->banner = $banner;
      endif;
      $saveData->content = $dataVal->content;
      $saveData->user_id = $user_id;
      $saveData->title = $dataVal->title;
      $saveData->save();
    }
  
    public static function getBanner($id)
    {
      return Banner::where('id', $id)->delete();
    }
}
