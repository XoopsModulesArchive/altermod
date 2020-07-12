<?php
//
// File: mydirname.php
// Module: altermod
// Version: v0.3
// Release Date: 24. Feb 2008
// Author: timgno
// Licence: GNU
//

if( ! defined( 'XOOPS_ROOT_PATH' ) ) exit ;
$mydirname = basename( dirname( dirname( __FILE__ ) ) ) ;
if( ! preg_match( '/^(\D+)(\d*)$/' , $mydirname , $regs ) ) 
  echo ( "invalid dirname: " . htmlspecialchars( $mydirname ) ) ;
  
$mydirnumber = $regs[2] === '' ? '' : intval( $regs[2] ) ;

?>