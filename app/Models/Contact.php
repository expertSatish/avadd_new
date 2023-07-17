<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public static function saveData($dataVal,  $id = null)
    {
      $saveData = ($id)? Contact::find($id): new Contact;
      $saveData->name = $dataVal->name;
      $saveData->email = $dataVal->email;
      $saveData->subject = $dataVal->subject;
      $saveData->message = $dataVal->message;
      $saveData->save();
    }
}
