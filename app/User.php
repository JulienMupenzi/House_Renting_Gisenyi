<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    public const CLIENT_ROLE = 'CLIENT';
    public const SPECIAL_CLIENT_ROLE = 'SPECIAL_CLIENT';
    public const AGENT_ROLE = 'AGENT_ROLE';
    public const ADMIN_ROLE = 'ADMIN_ROLE';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function roles()
    {
        return [
            self::CLIENT_ROLE => 'NORMAL CLIENT',
            self::SPECIAL_CLIENT_ROLE => 'SPECIAL CLIENT',
            self::AGENT_ROLE => 'AGENT',
            self::ADMIN_ROLE => 'ADMIN',
        ];
    }

    public function getImage()
    {
        return asset(Storage::url($this->photo));
    }

    public function isSpecial()
    {
        return $this->role === self::SPECIAL_CLIENT_ROLE;
    }

    public function isAgent()
    {
        return $this->role === self::AGENT_ROLE;
    }

    public function isAdmin()
    {
        return $this->role === self::ADMIN_ROLE;
    }
}
