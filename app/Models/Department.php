<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Department extends Model
{
    use HasFactory;

    public static function saveData($dataVal,  $id = null)
    {
      $saveData = ($id)? Department::find($id): new Department;
      $saveData->name = $dataVal->name;
      $saveData->slug = Str::slug($dataVal->name);
      $saveData->save();
    }

    public static function getDepartment($id)
    {
      return Department::where('id', $id)->delete();
    }

    public static function getDepartmentData()
    {
      return Department::get();

    }
}
