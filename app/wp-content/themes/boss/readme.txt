Theme Name: BOSS
Theme URI: http://divpusher.com/themes/boss-free/
Author: DIVPusher
Author URI: http://divpusher.com/
Description: A modern WordPress theme.
Version: 1.1.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: rtl-language-support, translation-ready, theme-options, left-sidebar, right-sidebar, custom-colors, featured-images, custom-menu
Text Domain: boss



Description
===========

A modern WordPress theme which is a perfect fit for business websites. 



Live preview of theme
=================================

http://divpusher.com/themes/boss/



Version history (changelog)
===========================

Boss v1.1.1 (2017-10-05)
------------------------------
- fixed style enqueue section in functions.php so a child theme now won't break



Boss v1.1.0 (2017-08-01)
------------------------------
- added 2 new page templates: 
	- full width image, auto height: the featured image you add to the page will be always 100% wide and height is automatically adjusted, keeping the aspect ratio
	- full width image, auto height, no sidebar: the same as above without the sidebar


Boss v1.0.9 (2016-10-25)
------------------------------
- typo fix in editor-style.css


Boss v1.0.8 (2016-10-24)
------------------------------
- removed category selector scripts
- removed post resets
- in customizer.php replaced esc_url to esc_url_raw for the links


Boss v1.0.6 (2016-10-13)
------------------------------
- removed category query from index.php 


Boss v1.0.5 (2016-10-04)
------------------------------
- removed blog category selector
- removed code from functions.php: if ( ! defined( 'ABSPATH' ) ) die( 'Error!' );
- removed code which always linked gallery images to file
- removed FontAwesome from TinyMCE
- removed unnecessary str_replace() from category list
- replaced tag listing method in content-single.php
- fixed prev/next post navigation in content-single.php
- fixed escaping in comments.php
- fixed missing 404 translation 
- fixed template-image.php content checking


Boss v1.0.4 (2016-08-01)
------------------------------
- fixed custom logo code
- footer text is now displays theme credentials only
- escaped all database output
- fixed index.php sidebar position variable


Boss v1.0.3 (2016-07-26)
------------------------------
- added missing license info
- provided unminified versions of JS files
- prefixed all variables with text domain
- fixed enqueue prefixes for third party resources
- fixed html5shiv enqueue
- removed search.php hardcoded posts per page setting
- made texts translatable in footer.php 


Boss v1.0.2 (2016-07-11)
------------------------------
- removed old IE browser warning
- fixed some missing internationalization
- fixed jquery loading
- removed custom gravatar function
- removed retina image maker
- removed language files
- startup.js enqueue is now prefixed
- escaped dp_color setting output
- now using default logo functions
- now using the_post_thumbnail()
- footer menu can be assigned as primary navigation menu
- changed the way how widget areas are loaded
- added page without sidebar template


Boss v1.0.1 (2016-06-28)
------------------------------
- removed deprecated theme tags 
- customizer sanitization fix
- renamed page templates
- admin_scripts.js now loads only where it's required
- divided functions.php into several parts for better maintainability
- renamed all function prefixes to theme's slug



Boss v1.0.0 (2016-02-07)
------------------------------
- Initial release.



Resources used in theme
===========================
- Reset CSS: http://meyerweb.com/eric/tools/css/reset/ 
License: none (public domain)

- Retina JS: http://imulus.github.io/retinajs/
License: MIT license
- HTML5 Shiv: https://github.com/aFarkas/html5shiv
License: MIT/GPL2 Licensed
- admin_scripts.js, dp.imageviewer.js, startup.js: created by DivPusher (http://divpusher.com)
License: none (public domain)

- FontAwesome icons: http://fortawesome.github.io/Font-Awesome/
License: Font Awesome licensed under SIL OFL 1.1

- Images used in live preview are from http://pixabay.com
License: CC0 Public Domain

