<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Styles for the resizable menus
 *
 * used by js/vendor/jquery/jquery.menuResizer-1.0.js
 *
 * @package    PhpMyAdmin-theme
 * @subpackage PMAHomme
 */

// unplanned execution path
if (! defined('PHPMYADMIN') && ! defined('TESTSUITE')) {
    exit();
}
?>
ul.resizable-menu a,
ul.resizable-menu span {
    display: block;
    margin: 0;
    padding: 0;
    white-space: nowrap;
    color: #f3f3f3;
}

ul.resizable-menu .submenu {
    display: none;
    position: relative;
}

ul.resizable-menu .shown {
    display: inline-block;
}

ul.resizable-menu ul {
    margin: 0;
    padding: 0;
    position: absolute;
    list-style-type: none;
    display: none;
    border: 1px #026bb3 solid;
    z-index: 2;
    <?php echo $right; ?>: 0;
}

ul.resizable-menu li:hover {
    color: #eaeaea;
    background: rgba(234, 234, 234, 0.1);
}

ul.resizable-menu li:hover ul,
ul.resizable-menu .submenuhover ul {
    display: block;
    background: #2196F3;
}

ul.resizable-menu ul li {
    width: 100%;
}
