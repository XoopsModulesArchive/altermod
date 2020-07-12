<?php
 
// inclusione intestazione modulo
include('header.php');

// dichiarazione template principale (prima di includere path con il file header.php)
$xoopsOption['template_main'] = "altermod.html";
 
// inclusione dell'intestazione della pagina (header file)
include(XOOPS_ROOT_PATH.'/header.php');

// Si inserisce in base al tema
$xoopsTpl->assign('mod_url', XOOPS_URL . "/modules/$mydirname/");
$xoopsTpl->assign('mod_img', XOOPS_URL . "/modules/$mydirname/images/altermod_logo.png");
if ($xoopsConfig['theme_set'] != 'default' && file_exists(XOOPS_THEME_PATH.'/'.$xoopsConfig['theme_set'].'/images/altermod_logo.png')) {
	$xoopsTpl->assign('mod_img', XOOPS_URL .'/themes/'.$xoopsConfig['theme_set'].'/images/altermod_logo.png');
}

// variabili per le lingue 
$xoopsTpl->assign('lang_title', _MD_ALTERMOD_TITLE);
$xoopsTpl->assign('lang_description', _MD_ALTERMOD_DESC);
$xoopsTpl->assign('lang_slogan', _MD_ALTERMOD_SLOGAN);
$xoopsTpl->assign('lang_return', _MD_ALTERMOD_RETURN);
$xoopsTpl->assign('lang_sorry', _MD_ALTERMOD_SORRY);

// per duplicare i file template
$xoopsTpl->assign('mydirname', "{$mydirname}.html");

// Personalizzazione dello stile
$xoopsTpl->assign("xoops_module_header", "<link rel='stylesheet' type='text/css' media='screen' href='".XOOPS_URL."/modules/$mydirname/altermod.css' />");

// inclusione del footer
include(XOOPS_ROOT_PATH.'/footer.php');

?>