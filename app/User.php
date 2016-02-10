<?php

namespace App;

<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;
=======
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Jenssegers\Mongodb\Model as Moloquent;

class User extends Moloquent implements
<<<<<<< HEAD
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
=======
AuthenticatableContract,
AuthorizableContract,
CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, Authorizable;
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    // public $incrementing = false;

     public function flyers()
    {
        //return $this->embedsMany(Flyer::class);
=======
    public function flyers()
    {
>>>>>>> a90c3c10c32f413b18963fa6aa6f5e4029d48ca0
        return $this->hasMany(Flyer::class);
    }

    protected $fillable = [
    'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];
}
