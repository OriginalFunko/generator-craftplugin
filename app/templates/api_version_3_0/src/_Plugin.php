<?php
/**
 * <%= pluginName %> plugin for Craft CMS 3.x
 *
 * <%= pluginDescription %>
 *
 * @link      <%= pluginAuthorUrl %>
 * @copyright <%= copyrightNotice %>
 */

namespace <%= pluginVendorName %>\<%= pluginDirName %>;

<% if (pluginComponents.indexOf('twigextensions') >= 0){ -%>
use <%= pluginVendorName %>\<%= pluginDirName%>\twigextensions\<%= pluginHandle %>TwigExtension;
<% } -%>
<% if (pluginComponents.indexOf('settings') >= 0){ -%>
use <%= pluginVendorName %>\<%= pluginDirName%>\models\Settings;
<% } -%>
<% if (pluginComponents.indexOf('variables') >= 0){ -%>
use <%= pluginVendorName %>\<%= pluginDirName%>\variables\<%= pluginHandle %>Variable;
<% } -%>

use Craft;
<% if (pluginComponents.indexOf('controllers') >= 0){ -%>
use craft\web\UrlManager;
use craft\events\RegisterUrlRulesEvent;
use yii\base\Event;
<% } -%>

/**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
 * --snip--
 * Craft plugins are very much like little applications in and of themselves. We’ve made it as simple as we can,
 * but the training wheels are off. A little prior knowledge is going to be required to write a plugin.
 *
 * For the purposes of the plugin docs, we’re going to assume that you know PHP and SQL, as well as some semi-
 * advanced concepts like object-oriented programming and PHP namespaces.
 *
 * https://craftcms.com/docs/plugins/introduction
 * --snip--
 *
<% } -%>
 * @author    <%= pluginAuthorName %>
 * @package   <%= pluginHandle %>
 * @since     <%= pluginVersion %>
 */

class <%= pluginHandle %> extends \craft\base\Plugin
{
    /**
     * Static property that is an instance of this plugin class so that it can be accessed via
     * <%= pluginHandle %>::$plugin
     * @var <%= pluginVendorName %>\<%= pluginDirName %>\<%= pluginHandle %>
     */
    public static $plugin;

    /**
     * Set our $plugin static property to this class so that it can be accessed via
     * <%= pluginHandle %>::$plugin
     * @param array $config [description]
     */
    public function __construct($id, $parent = null, $config = [])
    {
        static::$plugin = $this;
        static::setInstance($this);

        parent::__construct($id, $parent, $config);
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Called after the plugin class is instantiated; do any one-time initialization here such as hooks and events:
     *
     * Craft::$app->on('entries.saveEntry', function(Event $event) {
     *    // ...
     * });
     *
     * If you have a '/vendor/autoload.php' file, it will be loaded for you automatically;
     * you do not need to load it in your init() method.
     *
<% } -%>
     * @return mixed
     */
    public function init()
    {
        parent::init();
        $this->name = $this->getName();
<% if (pluginComponents.indexOf('twigextensions') >= 0){ -%>

<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
        /**
         * Add in our Twig extensions
         */
<% } -%>
        Craft::$app->view->twig->addExtension(new <%= pluginHandle %>TwigExtension());
<% } -%>
<% if (pluginComponents.indexOf('controllers') >= 0){ -%>

        /**
         * Register our site routes
         */
        Event::on(UrlManager::className(), UrlManager::EVENT_REGISTER_SITE_URL_RULES, function(RegisterUrlRulesEvent $event)
            {
                $event->rules['siteActionTrigger'] = '<%= pluginCamelHandle %>/<%= controllerName[0] %>';
            });

        /**
         * Register our CP routes
         */
        Event::on(UrlManager::className(), UrlManager::EVENT_REGISTER_CP_URL_RULES, function(RegisterUrlRulesEvent $event)
            {
                $event->rules['cpActionTrigger'] = '<%= pluginCamelHandle %>/<%= controllerName[0] %>/do-something';
            });
<% } -%>
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Returns the user-facing name of the plugin, to which can override the name in
     * plugin.json
     *
<% } -%>
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('<%= pluginDirName %>', '<%= pluginName %>');
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Returns whether the plugin should get its own tab in the CP header.
     *
<% } -%>
     * @return bool
     */
    public static function hasCpSection()
    {
        return false;
    }

<% if (pluginComponents.indexOf('settings') >= 0){ -%>
    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Returns your plugin’s settings model.
     *
<% } -%>
     * @return mixed
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Returns the HTML that displays your plugin’s settings.
     *
<% } -%>
     * @return mixed
     */
    protected function getSettingsHtml()
    {
        return Craft::$app->view->renderTemplate('<%= pluginDirName %>/<%= pluginHandle %>_Settings', [
            'settings' => $this->getSettings()
        ]);
    }

<% } -%>
<% if (pluginComponents.indexOf('variables') >= 0){ -%>
    /**
     * Returns the component definition that should be registered on the [[\craft\app\web\twig\variables\CraftVariable]] instance for this plugin’s handle.
     *
     * @return mixed|null The component definition to be registered.
     * It can be any of the formats supported by [[\yii\di\ServiceLocator::set()]].
     */
    public function defineTemplateComponent()
    {
        return '<%= pluginVendorName %>\<%= pluginDirName %>\variables\<%= pluginHandle %>Variable';
    }

<% } -%>
    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Called right before your plugin’s row gets stored in the plugins database table, and tables have been created
     * for it based on its records.
<% } -%>
     */
    protected function onBeforeInstall()
    {
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Called right after your plugin’s row has been stored in the plugins database table, and tables have been
     * created for it based on its records.
<% } -%>
     */
    protected function onAfterInstall()
    {
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Called right before your plugin’s record-based tables have been deleted, and its row in the plugins table
     * has been deleted.
<% } -%>
     */
    protected function onBeforeUninstall()
    {
    }

    /**
<% if ((typeof codeComments !== 'undefined') && (codeComments)){ -%>
     * Called right after your plugin’s record-based tables have been deleted, and its row in the plugins table
     * has been deleted.
<% } -%>
     */
    protected function onAfterUninstall()
    {
    }
}