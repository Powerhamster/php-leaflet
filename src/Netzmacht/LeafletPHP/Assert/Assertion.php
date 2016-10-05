<?php

/**
 * @package    php-leaflet
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2014-2016 netzmacht David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\LeafletPHP\Assert;

use Assert\Assertion as BaseAssertion;

/**
 * Project owns Assertion class.
 *
 * @package Netzmacht\LeafletPHP\Assert
 */
class Assertion extends BaseAssertion
{
    /**
     * The exception class.
     *
     * @var string
     */
    protected static $exceptionClass = 'Netzmacht\LeafletPHP\Assert\InvalidArgumentException';
}
