<?php
/**
 * FkPhpHaversine Interface
 *
 * @package FkPhpHaversine
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace Douggrubba\FkPhpHaversine;

/**
 * FkPhpHaversineInterface
 *
 * @author Doug Grubba <douglas.grubba@gmail.com>
 */
interface FkPhpHaversineInterface
{
    /**
     * Return the closest locations.
     *
     * @return array
     */
    public function closest($lat, $lng, $max_distance, $max_locations, $units, $fields);
}