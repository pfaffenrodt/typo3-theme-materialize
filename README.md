# No further development
Reasons:
* materializecss is a great framework with great features.
But I dont like to use colors as classes and support all "material" colors with css classes.

* The other reason is, that I achieved my goal. My goal was to create an base extension for Typo3 theme distribution. 
I will develop another extension but not with materializecss.

## Materialize typo3 theme
## Experimental theme [Demo](http://materialize.pfaffenrodt.de).

CSS Framework Materilizecss http://materializecss.com/
Base html layout is from Materilizecss. http://materializecss.com/templates/parallax-template/preview.html

# Goals:
* create extension based Typo3 theme distribution
* materilizecss css framework
* final step is to create/extract base theme extension to bootstrap an typo3 theme distribution

# Dependencies
* fluid_styled_content (Content Elements based on Fluid)
* ~~gridelements~~ (https://docs.typo3.org/typo3cms/extensions/gridelements/)
    - if you using gridelements. My advice is: switch to flux, fluidpowered system https://fluidtypo3.org/viewhelper.
* fluidpowered extensions 
    - flux
    - fluidpages
    - fluidcontent
    - vhs (https://fluidtypo3.org/viewhelpers/vhs/)


# research and inspiration:

Basics about creating an distribution extension:(video tutorials in german)
https://jweiland.net/video-anleitungen/typo3/typo3-projekte-verwalten/templates-als-distribution.html#c2647

Basics about create BackendLayouts without DB Records:(mod.web_layout.BackendLayouts)
https://docs.typo3.org/typo3cms/TSconfigReference/PageTsconfig/Mod/Index.html

### Adding page TSconfig, user TSconfig
https://wiki.typo3.org/Extension_Development,_add_Page_TSconfig,_User_TSconfig_and_TS
#### RTE config
https://docs.typo3.org/typo3cms/extensions/rtehtmlarea/Configuration/PageTsconfig/interfaceConfiguration/Index.html#rte-interface-configuration-properties
https://jweiland.net/typo3/codebeispiele/rte.html
https://axelerant.com/add-custom-css-classes-to-the-typo3-rte/

###Twitter Bootstrap themes with grids:
https://github.com/typo3-themes/
https://github.com/typo3-themes/themes_gridelements/


### ~~Gridelements~~
https://docs.typo3.org/typo3cms/extensions/gridelements/
https://jweiland.net/typo3/showcase/gridelements.html
https://networkteam.com/blog/gridelements-professionell-nutzen.html

### Menu
Build HMenu inside fluid using [vhs MenuViewHelper](https://fluidtypo3.org/viewhelpers/vhs/1.1.0/Page/MenuViewHelper.html).


# Progress
Only basics are made
