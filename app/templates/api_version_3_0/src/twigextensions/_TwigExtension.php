<?php
/**
 * <%= pluginName %> plugin for Craft CMS 3.x
 *
 * <%= pluginDescription %>
 *
 * @link      <%= pluginAuthorUrl %>
 * @copyright <%= copyrightNotice %>
 */

namespace <%= pluginVendorName %>\<%= pluginDirName %>\twigextensions;

use <%= pluginVendorName %>\<%= pluginDirName%>\<%= pluginHandle %>;

use Craft;

/**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
 * --snip--
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators, global variables, and
 * functions. You can even extend the parser itself with node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 * --snip--
 *
<% } -%>
 * @author    <%= pluginAuthorName %>
 * @package   <%= pluginHandle %>
 * @since     <%= pluginVersion %>
 */
class <%= pluginHandle %>TwigExtension extends \Twig_Extension
{
    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Returns the name of the extension.
     *
<% } -%>
     * @return string The extension name
     *
     * @inheritdoc
     */
    public function getName()
    {
        return '<%= pluginHandle %>';
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
<% } -%>
     * @return array
     *
     * @inheritdoc
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('someFilter', [$this, 'someInternalFunction']),
        );
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
 <% } -%>
    * @return array
     *
     * @inheritdoc
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('someFilter', [$this, 'someInternalFunction']),
        );
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Our function called via Twig; it can do anything you want
     *
 <% } -%>
     * @return string
     */
    public function someInternalFunction($text = null)
    {
        $result = $text . " in the way";

        return $result;
    }
}