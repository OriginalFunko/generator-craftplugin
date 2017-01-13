# generator-craftplugin Changelog

## 1.1.30 -- 2017.01.12

* [Added] Added section comments
* [Added] Added widgets
* [Improved] Cleaned up the css/js/template naming
* [Improved] Use DIRECTORY_SEPARATOR everywhere instead of /'s
* [Improved] Added an example Site and CP route for each controller

## 1.1.29 -- 2017.01.12

* [Improved] Added Console Commands to the 3.0.x API
* [Improved] PSR-2 linted code for the 3.0.x API
* [Improved] Various code-cleanup and fixes

## 1.1.28 -- 2017.01.09

* [Improved] We now call `parent::init()` in our overriden init() method in the 2.5.x API

## 1.1.27 -- 2017.01.09

* [Fixed] Fixed an issue that would cause the generator to fail if you had empty Controller or Services names

## 1.1.26 -- 2017.01.09

* [Fixed] Fixed a regression error that would cause Craft CMS API 2.5.x plugins to fail
* [Added] Added CHANGELOG.md to move the changelog to
* [Improved] Updated README.md

## 1.1.25 -- 2017.01.08

* [Added] Added CHANGELOG.md
* [Improved] Updated README.md

## 1.1.24 -- 2017.01.08

* [Improved] More Craft 3 API improvements / additions
* [Improved] Updated README.md

## 1.1.23 -- 2016.10.03

* [Added] Initial Craft 3 support
* [Updated] Updated README.md

## 1.1.22 -- 2016.09.18

* [Fixed] Fixed an issue the FieldType namespacing JS code
* [Updated] Updated README.md

## 1.1.21 -- 2016.06.29

* [Fixed] Fixed an issue with Composer support to the generated plugins
* [Updated] Updated README.md

## 1.1.20 -- 2016.06.22

* [Added] Added Composer support to the generated plugins
* [Updated] Updated README.md

## 1.1.19 -- 2016.06.19

* [Fixed] Fixed a bug where empty service names would generate errors
* [Updated] Updated README.md

## 1.1.18 -- 2016.06.16

* [Fixed] Fix service comment naming error
* [Updated] Updated README.md

## 1.1.17 -- 2016.05.02

* Code Comments fixes
* [Updated] Updated README.md

## 1.1.16 -- 2016.05.02

* Code Comments fixes
* [Updated] Updated README.md

## 1.1.15 -- 2016.05.02

* Code Comments fixes
* [Updated] Updated README.md

## 1.1.14 -- 2016.04.28

* We now `return $value;` in the FieldType's `prepValue()` and `prepValueFromPost()` template
* [Updated] Updated README.md

## 1.1.13 -- 2016.04.26

* Fixed an issue with the FieldType Javascript
* [Updated] Updated README.md

## 1.1.12 -- 2016.04.22

* Added a "Code Comments" checkbox, so that you can disable the verbose comments in the generated code scaffolding
* [Updated] Updated README.md

## 1.1.11 -- 2016.04.21

* Fixed widget settings issues
* [Updated] Updated README.md

## 1.1.10 -- 2016.04.12

* Fixed widget naming issues
* [Updated] Updated README.md

## 1.1.9 -- 2016.02.22

* We now lowercase the plugin name and handles before Camel-izing them, if the string contains any whitespace
* [Updated] Updated README.md

## 1.1.8 -- 2016.02.18

* Fixes/enhancements to the `_Widget.php` template
* [Updated] Updated README.md

## 1.1.7 -- 2016.01.28

* Numbers are now allowed in the plugin name and sub-handle names, so `News2Buffer` for example is okay now
* [Updated] Updated README.md

## 1.1.6 -- 2016.01.28

* Added some useful comments to the `Plugin.php` thanks to `ch.ris`
* [Updated] Updated README.md

## 1.1.5 -- 2016.01.25

* Added the ability to create `ConsoleCommands`
* [Updated] Updated README.md

## 1.1.4 -- 2016.01.24

* Made the `requires` dependencies an array, to allow for multiple dependencies
* Added an a new `Settings` component that determines if the plugin has AdminCP settings, and includes the appropriate templates/resources only if so
* Added the ability for BOILERPLATE_FILES to have dependencies just like templates
* [Updated] Updated README.md

## 1.1.3 -- 2016.01.20

* Craft Commerce "Purchasables" now adds an ElementType, Model, and Record
* Fixed an error in the naming of the plugin's Settings.twig template
* [Updated] Updated README.md

## 1.1.2 -- 2016.01.19

* Added a Craft Commerce Purchasable ElementType template
* [Updated] Updated README.md

## 1.1.1 -- 2016.01.11

* We now create per-FieldType and per-Widget CSS/JS/Twig templates, named appropriately
* Cleaned up the Widget.php template
* We now create Body and Settings Twig template for Widgets
* Made the naming of certain templates more consistent
* [Updated] Updated README.md

## 1.1.0 -- 2016.01.09

* In preparation for Craft 3.0, added support for multiple API targets for the plugin scaffolding
* Moved all of the configuration out of the Javascript and into a directory of `.json` files, one file per API target
* [Updated] Updated README.md

## 1.0.9 -- 2016.01.07

* Fixes
* [Updated] Updated README.md

## 1.0.8 -- 2016.01.07

* Added the ability to enter as many *Name's as you need, for multiple template files.  Just separate them with a ,
* Sanitized all of the templates to remove trailing white space, and converted all tabs to 4 spaces
* [Updated] Updated README.md

## 1.0.7 -- 2016.01.06

* Template fixes
* [Updated] Updated README.md

## 1.0.6 -- 2016.01.06

* Added Tasks to the templates
* [Updated] Updated README.md

## 1.0.5 -- 2016.01.06

* Added Widgets to the templates
* Added additional Record and Model templates if you select ElementTypes
* Minor generated code cleanup
* [Updated] Updated README.md

## 1.0.4 -- 2016.01.06

* Added support for named Services and Controllers
* Cleaned up the naming scheme for all plugin components; null values will be properly handled for all of the *Name's
* [Updated] Updated README.md

## 1.0.3 -- 2016.01.05

* You can now access the generator via the web at [pluginfactory.io](http://pluginfactory.io)
* Added support for command line arguments being passed to the generator
* [Updated] Updated README.md

## 1.0.2 -- 2016.01.04

* Added sub-questions for `ElementTypes`, `FieldTypes`, `Models`, and `Records` so that you can specify the name for each
* [Updated] Updated README.md

## 1.0.1 -- 2016.01.04

* Added the `store` property to some questions that should retain the default answers the user gives
* Added a selectable list of components that you want included in your plugin, so you can tailor it to exactly what you want included
* Added `field.html`, `field.css`, and `field.js` templates for FieldTypes
* [Updated] Updated README.me

## 1.0.0 -- 2016.01.03

* Initial release

Brought to you by [nystudio107](http://nystudio107.com)