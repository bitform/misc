<?php
/*
 * ipn.php
 *
 * PHP Toolkit for PayPal v0.51
 * http://www.paypal.com/pdn
 *
 * Copyright (c) 2004 PayPal Inc
 *
 * Released under Common Public License 1.0
 * http://opensource.org/licenses/cpl.php
 */

$base_folder = dirname(__FILE__);
require_once("$base_folder/includes/library.php");
require_once("$base_folder/includes/config.inc.php"); 
require_once("$base_folder/includes/global_config.inc.php");


// decide which post method to use
switch ($pp["post_method"])
{
  // php compiled with libCurl support
  case "libCurl":
    $result = libCurlPost($pp["url"], $_POST); 
    break;

  // cURL via command line
  case "curl": 
    $result = curlPost($pp["url"], $_POST); 
    break;

  // php fsockopen();
  case "fso":  
    $result = fsockPost($pp["url"], $_POST); 
    break;

  default:
    $result = fsockPost($pp["url"], $_POST);
    break;
}


// successful payment! finalize the submission in the database
if (eregi("VERIFIED", $result)) 
{
  ft_finalize_submission($pp["form_id"], $_POST['custom']);
}

// oh-oh, something either went wrong, the payment didn't go through or someone's coming to this page 
// directly in their browser  
else 
{

} 

?>
