<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class Lender extends Authenticatable
{
    use Notifiable;

        protected $guard = 'lender';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function products(){
            return $this->hasMany('App\Product');
        }
}
