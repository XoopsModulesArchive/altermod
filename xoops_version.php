<?php
//
// File: xoops_version.php
// Module: altermod
// Version: v0.3
// Release Date: 24. Feb 2008
// Author: timgno
// Licence: GNU
//

include "include/mydirname.php";

// main
$modversion['name'] = _MI_ALTERMOD_NAME;
$modversion['version'] = 0.32;
$modversion['description'] = _MI_ALTERMOD_DESC;
$modversion['author'] = "timgno";
$modversion['credits'] = "http://risorseweb.netsons.org - Thanks to http://www.xoopsitalia.org for all supports";
$modversion['help'] = "";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = 0;
$modversion['image'] = "images/altermod_slogo.png";
$modversion['dirname'] = $mydirname;
// Admin
$modversion['hasAdmin'] = 0;
// Menu
$modversion['hasMain'] = 1;
// Templates
$modversion['templates'][1]['file'] = "altermod.html";
$modversion['templates'][1]['description'] = "altermod for a module offline";
// Config
$modversion['config'][1]['name'] = "altermod_img_url";
$modversion['config'][1]['title'] = "_MI_ALTERMOD_IMG_URL";
$modversion['config'][1]['description'] = "_MI_ALTERMOD_DESC";
$modversion['config'][1]['default'] = "modules/$mydirname/images";

?>