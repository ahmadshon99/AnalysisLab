<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected  $table='user';
    protected $fillable = [
        'role_id','f_name','m_name','l_name','age', 'username','password','phone','address','email','start_date','end_date','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at','role_id'
    ];

}
