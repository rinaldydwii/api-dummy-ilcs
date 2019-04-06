<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class M_Vessel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'm_vessel';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vessel_name', 
        'voyage_in', 
        'voyage_out',
        'eta',
        'etb',
        'etd',
        'terminal',
        'name'
    ];
}
