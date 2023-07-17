<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forRecruiter extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $gallery, $id = null)
    {
      $saveData = ($id) ? forRecruiter::find($id) : new forRecruiter;
      if ($gallery) : $saveData->image = $gallery;
      endif;
      $saveData->save();

    }
    
    public static function getBanner($id)
    {
      $categoriesList = forRecruiter::find($id);
      unlink(str_replace("/forRecruiter/", "forRecruiter/",$categoriesList->image));
      $categoriesList->delete();
     
    }
}
