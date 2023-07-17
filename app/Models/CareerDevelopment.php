<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerDevelopment extends Model
{
    use HasFactory;

    public static function saveData($dataVal, $resume = null, $id = null)
    {
        $saveData = ($id) ? CareerDevelopment::find($id) : new CareerDevelopment();
        $saveData->f_name = $dataVal->f_name;
        $saveData->l_name = $dataVal->l_name;
        $saveData->email = $dataVal->email;
        $saveData->contact = $dataVal->contact;
        $saveData->dob = $dataVal->dob;
        $saveData->category = $dataVal->category;
        $saveData->experience = $dataVal->experience;
        $saveData->organization = $dataVal->organization;
        $saveData->subject_select = $dataVal->subject_select;
        if ($resume):
            $saveData->resume = $resume;
        endif;
        $saveData->save();
    }
}
