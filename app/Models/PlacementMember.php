<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PlacementMember extends Model
{
    use HasFactory;

    public static function saveData($dataVal,  $id = null)
    {
      $saveData = ($id)? PlacementMember::find($id): new PlacementMember;
      $saveData->name = $dataVal->name;
      $saveData->position = $dataVal->position;
      $saveData->contact = $dataVal->contact;
      $saveData->status = $dataVal->status;
      $saveData->save();
    }

    public static function getDepartment($id)
    {
      return PlacementMember::where('id', $id)->delete();
    }
}
