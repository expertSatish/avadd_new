<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\MsgApp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $prefix = 'U' . date('ymd');
            $model->user_id = IdGenerator::generate(['table' => 'users', 'field' => 'user_id', 'length' => 10, 'reset_on_prefix_change' => true, 'prefix' => $prefix]);
        });
    }
    public static function saveData($record, $id = null)
    {
        //or sab update
        try {
            $password = Str::random(10);
            $saveData = ($id) ? User::find($id) : new User;
            $saveData->name = $record->name;
            $saveData->email = $record->email;
            $saveData->mobile = $record->mobile;
            $saveData->user_type = MsgApp::ADMIN;       
            $saveData->save();
        } catch (\Illuminate\Database\QueryException $ex) {
            return User::saveData($record, $id);
        }
    }
    
}
