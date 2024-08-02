<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Owner
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $phone
 * @property $address
 * @property $dni
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Owner extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
		'address' => 'required',
		'dni' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','phone','address','dni'];

    public function pets(){
      return $this->hasMany('App\Models\Pet');
    }

}
