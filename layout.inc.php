<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * configures general layout
 * for detailed layout configuration please refer to the css files
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

/**
 * navi frame
 */
// navi frame width
$GLOBALS['cfg']['NaviWidth']                = 240;

// foreground (text) color for the navi frame
$GLOBALS['cfg']['NaviColor']                = '#f3f3f3';

// background for the navi frame
$GLOBALS['cfg']['NaviBackground']           = '#40434b';

// foreground (text) color of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerColor']         = '#d9dbde';

// background of the pointer in navi frame
$GLOBALS['cfg']['NaviPointerBackground']    = '#2195f3';

/**
 * main frame
 */
// foreground (text) color for the main frame
$GLOBALS['cfg']['MainColor']                = '#eaeaea';

// background for the main frame
$GLOBALS['cfg']['MainBackground']           = '#282a2f';

// foreground (text) color of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerColor']       = '#f3f3f3';

// background of the pointer in browse mode
$GLOBALS['cfg']['BrowsePointerBackground']  = '#cfc';

// foreground (text) color of the marker (visually marks row by clicking on it)
// in browse mode
$GLOBALS['cfg']['BrowseMarkerColor']        = '#f3f3f3';

// background of the marker (visually marks row by clicking on it) in browse mode
$GLOBALS['cfg']['BrowseMarkerBackground']   = '#fc9';

/**
 * fonts
 */
/**
 * the font family as a valid css font family value,
 * if not set the browser default will be used
 * (depending on browser, DTD and system settings)
 */
$GLOBALS['cfg']['FontFamily']           = 'sans-serif';
/**
 * fixed width font family, used in textarea
 */
$GLOBALS['cfg']['FontFamilyFixed']      = 'monospace';

/**
 * tables
 */
// border
$GLOBALS['cfg']['Border']               = 0;
// table header and footer color
$GLOBALS['cfg']['ThBackground']         = '#484d56';
// table header and footer background
$GLOBALS['cfg']['ThColor']              = '#fff';
// table data row background
$GLOBALS['cfg']['BgOne']                = '#383c42';
// table data row background, alternate
$GLOBALS['cfg']['BgTwo']                = '#303338';
