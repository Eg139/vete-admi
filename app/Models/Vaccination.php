<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vaccination
 *
 * @property $id
 * @property $pet_id
 * @property $vaccine_name
 * @property $vaccination_date
 * @property $expiration_date
 * @property $notes
 * @property $created_at
 * @property $updated_at
 *
 * @property Pet $pet
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vaccination extends Model
{
    
    static $rules = [
		'pet_id' => 'required',
		'vaccine_name' => 'required',
		'vaccination_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pet_id','vaccine_name','vaccination_date','expiration_date','notes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pet()
    {
        return $this->hasOne('App\Models\Pet', 'id', 'pet_id');
    }
    

}
