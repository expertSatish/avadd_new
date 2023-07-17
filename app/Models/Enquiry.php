<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;


    public static function saveData($dataVal, $id = null)
    {
        $saveData = ($id) ? Enquiry::find($id) : new Enquiry();
        $saveData->name = $dataVal->name;
        $saveData->email = $dataVal->email;
        $saveData->phone = $dataVal->phone;
        $saveData->category = $dataVal->category;
        $saveData->program = $dataVal->program;
        $saveData->state = $dataVal->state;
        $saveData->city = $dataVal->city;
        $saveData->save();
    }
}
