<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryVideo extends Model
{
    use HasFactory;

    public static function saveData($dataVal,  $id = null)
    {
      $saveData = ($id)? GalleryVideo::find($id): new GalleryVideo;
      $saveData->video_link = $dataVal->video_link;
      $saveData->save();
    }

    public static function getBanner($id)
    {
      return GalleryVideo::where('id', $id)->delete();
    }
}
