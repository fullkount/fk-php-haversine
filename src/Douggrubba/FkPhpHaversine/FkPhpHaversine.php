<?php
/**
 * Great circle calculations in model form.
 *
 * @package FkPhpHaversine
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace Douggrubba\FkPhpHaversine;

use Illuminate\Database\Eloquent\Model;

/**
 * FkPhpHaversine
 *
 * @author Doug Grubba <douglas.grubba@gmail.com>
 */
class FkPhpHaversine implements FkPhpHaversineInterface
{

    /**
     * config array
     *
     * @var array
     */
    protected $config;

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * Return the closest locations.
     *
     * @param  float    $lat
     * @param  float    $lng
     * @param  integer  $max_distance
     * @param  integer  $max_locations
     * @param  string   $units
     * @param  array    $fields
     * @return array
     */
    public function closest($lat, $lng, $max_distance = 25, $max_locations = 10, $units = 'miles', $fields = false)
    {

    }

}
