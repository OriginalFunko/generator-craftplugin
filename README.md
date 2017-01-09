# generator-craftplugin

generator-craftplugin is a [Yeoman](http://yeoman.io) generator for [Craft CMS](http://www.buildwithcraft.com) plugins

Type just `yo craftplugin` and a new Craft CMS plugin tailored to your liking will be created.

You can also access the generator via the web at [pluginfactory.io](http://pluginfactory.io)

## Installation

This assumes you have `nodejs`, `npm`, and `yeoman` installed already.

1. Download & unzip the file and place the `generator-craftplugin` directory onto your dev machine
2.  -OR- do a `git clone https://github.com/nystudio107/generator-craftplugin.git` directly onto your dev machine.  You can then update it with `git pull`
3. On the command line, from the root of the generator-craftplugin project (in the `generator-craftplugin/` folder), type: `npm link` to install the project dependencies and symlink a global module.  On some setups, you may have to do `sudo npm link --no-bin-links`
4.  -OR- do an `npm -g install generator-craftplugin` to install it via npm (and thus skip the `npm link` step)
5. The generator folder should be named `generator-craftplugin`.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Requires Node version 4.0.0 or later.

## Usage

To create a new Craft CMS plugin and use generator-craftplugin to scaffold it:

    yo craftplugin

generator-craftplugin will ask you a few questions:

* **Plugin name:** - enter the name of your plugin
* **Short description of the plugin:** - enter a short (around 120 characters or less) description of the plugin and what it does
* **Plugin initial version:** - enter the initial version of the plugin, e.g.: `1.0.0` or `0.0.1`
* **Plugin author name:** - enter the name of the author of the plugin (either an individual or a company)
* **Plugin author URL:** - enter the URL (with the `http://`) of the website of the plugin author
* **Plugin author GitHub.com name:** - enter the GitHub.com handle of the author of the plugin.  If you don't have one, just leave it blank
* **Select what components your plugin will have:** - select the components you want included in your plugin, using the arrow keys to change the component, and `<space>` to select them.

If you selected `Controllers`, `ElementTypes`, `FieldTypes`, `Models`, `Purchasables`. `Records`, `Services`, `Tasks`, or `Widgets` components, it will also ask you for a name for each one, respectively.  If you want multiple components, just separate them with a , in the name input.

generator-craftplugin will then do the following for you:

1. Create the `pluginname` directory in the current directory, properly lower-cased and stripped of spaces
2. Create all of the properly named, documented files & folders for your new Craft CMS plugin

The code generated conforms to Pixel & Tonic's [Coding Standards](https://github.com/pixelandtonic/CodingStandards/blob/master/standards/PHP.md), and includes a number of other ancillary files such as `README.md`, `icon.svg`, `releases.json`, etc. to get you going.

### Sample Output

Here's an example of the output from a `yo nystudio107` generator:

```
[ Initializing ]
? Select what Craft CMS API to target: (Use arrow keys)
❯ Version 2.5.x 
[ Prompting ]
? Plugin name: My Cool new thing!
? Short description of the plugin: This is a generic Craft CMS plugin
? Plugin initial version: 1.0.0
? Plugin author name: John Doe
? Plugin author URL: http://DoeDesign.com/
? Plugin author GitHub.com name: doedesign
? Select what components your plugin will have: (Press <space> to select)
❯◯ ConsoleCommands
 ◯ Controllers
 ◉ ElementTypes
 ◉ FieldTypes
 ◉ Models
 ◯ Purchasables
 ◉ Records
 ◯ Services
 ◉ Settings
 ◯ Tasks
 ◉ TwigExtensions
 ◉ Variables
 ◯ Widgets
? Name of your ElementType: Satu
? Name of your FieldType: Dua
? Name of your Model: Tiga
? Name of your Record: Empat
[ Configuring ]
{ pluginName: 'My Cool new thing!',
  pluginDescription: 'This is a generic Craft CMS plugin',
  pluginVersion: '1.0.0',
  pluginAuthorName: 'John Doe',
  pluginAuthorUrl: 'http://DoeDesign.com/',
  pluginAuthorGithub: 'doedesign',
  pluginComponents: 
   [ 'elementtypes',
     'fieldtypes',
     'models',
     'records',
     'twigextensions',
     'variables' ],
  elementName: [ '_Satu' ],
  fieldName: [ '_Dua' ],
  modelName: [ '_Tiga' ],
  recordName: [ '_Empat' ],
  templatesDir: 'templates',
  pluginDirName: 'mycoolnewthing',
  pluginCamelHandle: 'myCoolNewThing',
  pluginHandle: 'MyCoolNewThing',
  dateNow: '2016-01-10T04:48:29.362Z',
  niceDate: '2016.01.10',
  copyrightNotice: 'Copyright (c) 2016 John Doe',
  pluginDownloadUrl: 'https://github.com/doedesign/mycoolnewthing/archive/master.zip',
  pluginDocsUrl: 'https://github.com/doedesign/mycoolnewthing/blob/master/README.md',
  pluginReleasesUrl: 'https://raw.githubusercontent.com/doedesign/mycoolnewthing/master/releases.json',
  pluginCloneUrl: 'https://github.com/doedesign/mycoolnewthing.git' }
+ Creating Craft plugin folder mycoolnewthing
[ Writing ]
> Writing template files
+ templates/_Plugin.php wrote to mycoolnewthing/MyCoolNewThingPlugin.php
+ templates/_PluginWithTwig.php wrote to mycoolnewthing/MyCoolNewThingPlugin.php
+ templates/_README.md wrote to mycoolnewthing/README.md
+ templates/_LICENSE.txt wrote to mycoolnewthing/LICENSE.txt
+ templates/_releases.json wrote to mycoolnewthing/releases.json
+ templates/elementtypes/_ElementType.php wrote to mycoolnewthing/elementtypes/MyCoolNewThing_SatuElementType.php
+ templates/fieldtypes/_FieldType.php wrote to mycoolnewthing/fieldtypes/MyCoolNewThing_DuaFieldType.php
+ templates/templates/_field.twig wrote to mycoolnewthing/templates/field.twig
+ templates/resources/css/_field.css wrote to mycoolnewthing/resources/css/field.css
+ templates/resources/js/_field.js wrote to mycoolnewthing/resources/js/field.js
+ templates/models/_Model.php wrote to mycoolnewthing/models/MyCoolNewThing_TigaModel.php
+ templates/models/_ElementModel.php wrote to mycoolnewthing/models/MyCoolNewThing_SatuModel.php
+ templates/records/_Record.php wrote to mycoolnewthing/records/MyCoolNewThing_EmpatRecord.php
+ templates/records/_ElementRecord.php wrote to mycoolnewthing/records/MyCoolNewThing_SatuRecord.php
+ templates/templates/_settings.twig wrote to mycoolnewthing/templates/settings.twig
+ templates/translations/_en.php wrote to mycoolnewthing/translations/en.php
+ templates/twigextensions/_TwigExtension.php wrote to mycoolnewthing/twigextensions/MyCoolNewThingTwigExtension.php
+ templates/variables/_Variable.php wrote to mycoolnewthing/variables/MyCoolNewThingVariable.php
+ templates/resources/css/_style.css wrote to mycoolnewthing/resources/css/style.css
+ templates/resources/js/_script.js wrote to mycoolnewthing/resources/js/script.js
> Copying boilerplate files
+ templates/resources/icon-mask.svg copied to mycoolnewthing/resources/icon-mask.svg
+ templates/resources/icon.svg copied to mycoolnewthing/resources/icon.svg
+ templates/resources/images/plugin.png copied to mycoolnewthing/resources/images/plugin.png
+ templates/resources/screenshots/plugin_logo.png copied to mycoolnewthing/resources/screenshots/plugin_logo.png
> Sync to file system
   create mycoolnewthing/MyCoolNewThingPlugin.php
   create mycoolnewthing/README.md
   create mycoolnewthing/LICENSE.txt
   create mycoolnewthing/releases.json
   create mycoolnewthing/elementtypes/MyCoolNewThing_SatuElementType.php
   create mycoolnewthing/fieldtypes/MyCoolNewThing_DuaFieldType.php
   create mycoolnewthing/templates/field.twig
   create mycoolnewthing/resources/css/field.css
   create mycoolnewthing/resources/js/field.js
   create mycoolnewthing/models/MyCoolNewThing_TigaModel.php
   create mycoolnewthing/models/MyCoolNewThing_SatuModel.php
   create mycoolnewthing/records/MyCoolNewThing_EmpatRecord.php
   create mycoolnewthing/records/MyCoolNewThing_SatuRecord.php
   create mycoolnewthing/templates/settings.twig
   create mycoolnewthing/translations/en.php
   create mycoolnewthing/twigextensions/MyCoolNewThingTwigExtension.php
   create mycoolnewthing/variables/MyCoolNewThingVariable.php
   create mycoolnewthing/resources/css/style.css
   create mycoolnewthing/resources/js/script.js
   create mycoolnewthing/resources/icon-mask.svg
   create mycoolnewthing/resources/icon.svg
   create mycoolnewthing/resources/images/plugin.png
   create mycoolnewthing/resources/screenshots/plugin_logo.png
[ Install ]
[ End ]
> End install commands
+ Fin. executed
Your Craft CMS plugin MyCoolNewThing has been created.
The default LICENSE.txt is the MIT license; feel free to change it as you see fit.
> All set.  Have a nice day.
```

## Command line options

The `craftplugin` generator can also be passed arguments via the command line, bypassing the interactive prompts.  So it's possible do do something like this:

    yo craftplugin --pluginComponents="controllers,elementtypes,fieldtypes,models,records,services,settings,twigextensions,variables" --apiVersion="api_version_2_5" --pluginName="Gimme the works" --pluginDescription="Some cool plugin" --pluginVersion="1.0.0" --pluginAuthorName="Andrew Welch" --pluginAuthorUrl="http://nystudio107.com" --pluginAuthorGithub="khalwat" --elementName="Satu,One" --fieldName="Dua" --modelName="Tiga" --recordName="Empat"

Brought to you by [nystudio107](http://nystudio107.com)