<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pet
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $age
 * @property $owner_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Owner $owner
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pet extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'age' => 'required',
		'owner_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','age','owner_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner(){
      return $this->belongsTo(Owner::class);
    }
    

}
