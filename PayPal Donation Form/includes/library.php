<?php

/** 
 * library.php
 * -----------
 *
 * This contains all the configuration settings for your form integration.
 */ 

 
// the path needs to be updated to include your api.php
$includes_folder = dirname(__FILE__);
require_once("$includes_folder/path/to/global/api/api.php");


$pp = array();

// your Form Tools form ID
$pp["form_id"] = 1;

// the Form Tools submission mode
$pp["mode"] = "initialize";

// your paypal email address
$pp["business"] = "joebloggs@something.com"; 

// your website root URL
$pp["site_url"] = "http://www.yoursite.com";

// where the user is directed to after successful payment
$pp["success_url"] = "/donate/success.php";

// where the user is directed to after cancelled payment
$pp["cancel_url"] = "/donate/cancelled.php";

// the location of the ipn.php file
$pp["notify_url"] = "/donate/ipn.php";

// The currency code [USD,CAD,GBP,JPY,EUR]
$pp["currency_code"] = "CAD";

// "fso": fsockopen, "curl": cmd line, "libCurl": PHP compiles with libCurl
$pp["post_method"] = "fso";

// When you are finished testing, change this to: https://www.paypal.com/cgi-bin/webscr
$pp["url"] = "https://www.sandbox.paypal.com/cgi-bin/webscr";


// -------------------  OPTIONAL SETTINGS ---------------

// if included, this will include your logo in their pages. Should be a path from the webroot, e.g. "/images/logo.jpg"  
$pp["image_url"] = "";

/// only needed if you use the curl or libcurl post_methods
$pp["curl_location"] = "/usr/local/bin/curl";