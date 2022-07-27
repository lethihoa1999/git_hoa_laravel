<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'mail_address',
        'password',
        'name',
        'address',
        'phone',
    ];

    public function table_show()
    {
        return User::orderBy('mail_address', 'ASC')->paginate(20);
    }

    public function add_data($request){
        return DB::table('users')->insert([
            'mail_address'=>$request->input('mail_address'),
            'password'=>Hash::make($request->input('password')),
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
        ]);
    }

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
}
