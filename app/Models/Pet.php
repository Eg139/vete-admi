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
 * @property $weight
 * @property $breed
 * @property $medical_history
 * @property $allergies
 * @property $vaccinations
 * @property $previous_treatments
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
        'weight' => 'required',
        'breed' => 'nullable',
        'medical_history' => 'nullable',
        'allergies' => 'nullable',
        'vaccinations' => 'nullable',
        'previous_treatments' => 'nullable',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'age',
        'owner_id',
        'weight',
        'breed',
        'medical_history',
        'allergies',
        'vaccinations',
        'previous_treatments'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner(){
      return $this->belongsTo(Owner::class);
    }
}
