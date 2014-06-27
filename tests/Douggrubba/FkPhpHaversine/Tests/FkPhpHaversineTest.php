<?php
/**
 * Test BustersPhp methods
 *
 * @package BustersPhp
 * @license MIT License <http://opensource.org/licenses/mit-license.html>
 */
namespace MikeFunk\BustersPhp\Tests;

use Douggrubba\FkPhpHaversine\FkPhpHaversine;
use Mockery;

/**
 * FkPhpHaversine
 *
 * @author Doug Grubba <douglas.grubba@gmail.com>
 */
class FkPhpHaversineTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The BustersPhp class
     *
     * @var BustersPhp
     */
    protected $fkPhpHaversine;

    /**
     * construct
     *
     * @return void
     */
    public function setUp()
    {
        $this->$fkPhpHaversine = new FkPhpHaversine;
    }

}