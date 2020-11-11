<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'family', 'phone', 'password', 'birthdate', 'nationalCode', 'gender', 'address', 'wallet', 'profileImage', 'isMarital', 'isOperator', 'isAdmin', 'isWorker', 'isEmployer', 'education', 'tell'
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

    public function worker()
    {
        return $this->hasOne(Worker::class, 'u_id', 'id');
    }

    public function employer()
    {
        return $this->hasOne(Employer::class, 'u_id', 'id');
    }

    public function families()
    {
        return $this->hasMany(Family::class, 'u_id');
    }

    public function learns()
    {
        return $this->hasMany(Learn::class, 'u_id');
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class, 'u_id');
    }

    public function requests()
    {
        return $this->hasMany(Request::class, 'u_id');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'u_id');
    }

    public function orders_worker()
    {
        return $this->hasMany('id', 'w_id');
    }

    public function orders_employer()
    {
        return $this->hasMany('id', 'e_id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'e_id');
    }

    public function skills()
    {
        return $this->hasMany(Skill::class, 'u_id', 'id');
    }

    public function comments_worker()
    {
        return $this->hasMany(Comment::class, 'w_id', 'id');
    }

    public function comment_employer()
    {
        return $this->hasMany('id', 'e_id');
    }
}
