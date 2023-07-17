<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisionMission extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $id = null)
    {
      $saveData = ($id) ? VisionMission::find($id) : new VisionMission;
      $saveData->vision = $dataVal->vision;
      $saveData->mission = $dataVal->mission;
      $saveData->objective = $dataVal->objective;
      $saveData->save();
      return $saveData->id;
    }

    
    public static function updateData($vision, $mission, $objective, $id = null)
    {
      $saveData = ($id) ? VisionMission::where('id', $id)->first() : new VisionMission;
      if($vision): $saveData->vision = $vision; endif;
      if ($mission) : $saveData->mission = $mission; endif;
      if ($objective) : $saveData->objective = $objective; endif;
      $saveData->save();
    }
}
