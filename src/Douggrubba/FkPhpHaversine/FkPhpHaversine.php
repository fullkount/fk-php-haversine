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
class FkPhpHaversine extends Model implements FkPhpHaversineInterface
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

        // Allow for changing of units of measurement
        switch ($units) {
            case 'miles':
                //radius of the great circle in miles
                $gr_circle_radius = 3959;
                break;
            case 'kilometers':
                //radius of the great circle in kilometers
                $gr_circle_radius = 6371;
                break;
        }

        // Support the selection of certain fields
        if ( ! $fields) {
            $fields = ['*'];
        }


        // Generate the select field for disctance
        $disctance_select = sprintf(
            "( %d * acos( cos( radians(%s) ) " .
            " * cos( radians( lat ) ) " .
            " * cos( radians( lng ) - radians(%s) ) " .
            " + sin( radians(%s) ) * sin( radians( lat ) ) " .
            ") " .
            ") " .
            "AS distance",
            $gr_circle_radius,
            $lat,
            $lng,
            $lat
        );

        return static::select($disctance_select)
            ->select('*')
            ->having('distance', '<', $max_distance)
            ->take($max_locations)
            ->order_by('distance', 'ASC')
            ->get([$fields, $disctance_select]);

    }

}
