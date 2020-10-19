<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sales
 * @property $id;
 * @property $origin_state;
 * @property $city;
 * @property $destination_state;
 * @property $destination_city;
 * @property $proposed_rate_mile_flatbed;
 * @property $fsc_7_18;
 * @property $six_thirteen;
 * @property $meet_minimum;
 * @property $miles;
 * @property $dollar_value;
 * @property $cost_no_tarp;
 * @property $cost_tarped;
 * @property $per_m;
 *
 * @package App\Models
 */
class TMC extends Model
{
    public $fillable = ['origin_state', 'city', 'destination_state', 'destination_city', 'proposed_rate_mile_flatbed', 'fsc_7_18', 'six_thirteen', 'meet_minimum', 'miles', 'dollar_value', 'cost_no_tarp', 'cost_tarped', 'per_m'];
    public $timestamps = true;
    protected $table = 'tmc';
    protected $primaryKey = 'id';
    protected $connection = 'sqlite';
}
