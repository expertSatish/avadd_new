<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $gallery, $user_id, $id = null)
    {
      $saveData = ($id) ? Gallery::find($id) : new Gallery;
      if ($gallery) : $saveData->image = $gallery;
      endif;
      $saveData->user_id = $user_id;
      $saveData->save();

    }
    
    public static function getBanner($id)
    {
      $categoriesList = Gallery::find($id);
      unlink(str_replace("/gallery/", "gallery/",$categoriesList->image));
      $categoriesList->delete();
     
    }
}
