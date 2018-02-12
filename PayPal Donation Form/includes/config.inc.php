<?php
/*
 * config.inc.php
 *
 * PHP Toolkit for PayPal v0.51
 * http://www.paypal.com/pdn
 *
 * Copyright (c) 2004 PayPal Inc
 * Modified by Ben Keen, ben.keen@gmail.com, 2009
 *
 * Released under Common Public License 1.0
 * http://opensource.org/licenses/cpl.php
 */

if (!isset($paypal))
  $paypal = array();

$paypal["return_method"] = 2; // 1=GET 2=POST
$paypal["lc"] = "US";
$paypal["bn"] = "toolkit-php";
$paypal["cmd"] = "_xclick";

// payment Page Settings
$paypal["display_comment"] ="0"; //0=yes 1=no
$paypal["comment_header"] = "Comments";
$paypal["continue_button_text"] = "Continue >>";
$paypal["background_color"] = ""; //""=white 1=black
$paypal["display_shipping_address"] = "1"; //""=yes 1=no
$paypal["display_comment"] = "1"; //""=yes 1=no

// product settings
$paypal["item_name"]   = isset($_POST["item_name"]) ? $_POST["item_name"] : "";
$paypal["item_number"] = "";
$paypal["amount"]      = isset($_POST["amount"]) ? $_POST["amount"] : "";
$paypal["on0"]         = isset($_POST["on0"]) ? $_POST["on0"] : "";
$paypal["os0"]         = isset($_POST["os0"]) ? $_POST["os0"] : "";
$paypal["on1"]         = isset($_POST["on1"]) ? $_POST["on1"] : "";
$paypal["os1"]         = isset($_POST["os1"]) ? $_POST["os1"] : "";
$paypal["quantity"]    = isset($_POST["quantity"]) ? $_POST["quantity"] : "";
$paypal["edit_quantity"] = ""; // 1=yes ""=no
$paypal["invoice"]     = isset($_POST["invoice"]) ? $_POST["invoice"] : "";
$paypal["tax"]         = isset($_POST["tax"]) ? $_POST["tax"] : "";

// shipping and Taxes
$paypal["shipping_amount"] = isset($_POST["shipping_amount"]) ? $_POST["shipping_amount"] : ""; 
$paypal["shipping_amount_per_item"] = "";
$paypal["handling_amount"] = "";
$paypal["custom"] = isset($_POST["custom"]) ? $_POST["custom"] : "";

// customer Settings
$paypal["firstname"] = isset($_POST["firstname"]) ? $_POST["firstname"] : ""; 
$paypal["lastname"]  = isset($_POST["lastname"]) ? $_POST["lastname"] : ""; 
$paypal["address1"]  = isset($_POST["address1"]) ? $_POST["address1"] : "";
$paypal["address2"]  = isset($_POST["address2"]) ? $_POST["address2"] : "";
$paypal["city"]      = isset($_POST["city"]) ? $_POST["city"] : "";
$paypal["state"]     = isset($_POST["state"]) ? $_POST["state"] : "";
$paypal["zip"]       = isset($_POST["zip"]) ? $_POST["zip"] : "";
$paypal["email"]     = isset($_POST["email"]) ? $_POST["email"] : "";
$paypal["phone_1"]   = isset($_POST["phone1"]) ? $_POST["phone1"] : "";
$paypal["phone_2"]   = isset($_POST["phone2"]) ? $_POST["phone2"] : ""; 
$paypal["phone_3"]   = isset($_POST["phone3"]) ? $_POST["phone3"] : "";

