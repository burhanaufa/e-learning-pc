<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;



class Guru extends Authenticatable

{

    use Notifiable;
    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */
    protected $guard ='guru';

    protected $fillable = [

        'name', 'email', 'password',

    ];



    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */

    protected $hidden = [

        'password', 'remember_token',

    ];
    public function setPasswordAttribute($val)
    {
     return $this->attributes['password'] = bcrypt($val);
    }


    public function mapel()
    {
        return $this->belongsTo('App\Mapel');
    }
      public function siswa()
     {
          return $this->belongsToMany('App\Siswa');
    }
}
