<?php

$curr_folder = dirname(__FILE__);
require_once("$curr_folder/includes/library.php");
require_once("$curr_folder/includes/config.inc.php"); 
require_once("$curr_folder/includes/global_config.inc.php");

$fields = ft_api_init_form_page($pp["form_id"]);

// combine the custom settings from /includes/library.php
$paypal = array_merge($pp, $paypal);

// store the submission ID in the custom field to pass to and from PayPal
$fields["custom"] = $fields["form_tools_submission_id"];

$paypal = array_merge($paypal, $fields);
?>
<html>
<head>
  <title>Donation Form</title>
  <link rel="stylesheet" type="text/css" href="includes/main.css">
</head>
<body onload="document.paypal_form.submit();">

  <form method="post" name="paypal_form" action="<?php echo $paypal['url']; ?>">

    <?php
    showVariables(); 
    ?>
  
    <p>
      <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="333333">Processing Transaction . . . </font>
    </p>
  
    <noscript>
      <p>
        Please click the button below to continue!
      </p>
      <input type="submit" value="CONTINUE" />
    </noscript>

  </form>

</body>
</html>		
