<?php

namespace craft\plugins\<%= pluginDirName %>\models;

use craft\app\base\Model;

/**
 * <%= pluginName %> plugin for Craft CMS 3.x
 *
 * <%= modelName[index] %> Model
 *
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
 * --snip--
 * Models are containers for data. Just about every time information is passed between services, controllers, and
 * templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 * --snip--
 *
<% } -%>
 * @author    <%= pluginAuthorName %>
 * @copyright <%= copyrightNotice %>
 * @link      <%= pluginAuthorUrl %>
 * @package   <%= pluginHandle %>
 * @since     <%= pluginVersion %>
 */

class <%= modelName[index] %> extends Model
{
    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Some model attribute
<% } -%>
     * @var string
     */
    public $someAttribute;

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
<% } -%>
     * @return array
    */
    public function rules()
    {
        return [
            ['someAttribute', 'string', 'default' => 'Some Default'],
        ];
    }
}