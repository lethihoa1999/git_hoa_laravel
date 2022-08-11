<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function listUser() 
    {
        return self::select('mail_address', 'password', 'name', 'address', 'phone',)
            ->orderBy('mail_address', 'ASC')
            ->paginate(20);
    }

    public function createUser($request) 
    {
        return self::create([
            'mail_address' => $request->mail_address,
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
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
}
