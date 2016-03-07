<?php
/**
 * Stringy plugin for Craft CMS
 *
 * Stringy Twig Extension
 *
 * --snip--
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators, global variables, and
 * functions. You can even extend the parser itself with node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 * --snip--
 *
 * @author    Mats Mikkel Rummelhoff
 * @copyright Copyright (c) 2016 Mats Mikkel Rummelhoff
 * @link      http://mmikkel.no
 * @package   Stringy
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class StringyTwigExtension extends \Twig_Extension
{
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Stringy';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return array(
            'stringy' => new \Twig_Filter_Method($this, 'stringy'),
        );
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
     * @return array
     */
    // public function getFunctions()
    // {
    //     return array(
    //         'someFunction' => new \Twig_Function_Method($this, 'someInternalFunction'),
    //     );
    // }

    /**
     * Our function called via Twig; it can do anything you want
     *
     * @return string
     */
    public function stringy($text, $method)
    {
        $arguments = func_get_args();
        $arguments = array_slice($arguments, 2, count($arguments));
        array_unshift($arguments, $text);
        return call_user_func_array(array('Stringy\StaticStringy', $method), $arguments);
    }
}