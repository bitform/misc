<?php
$curr_folder = dirname(__FILE__);
require_once("$curr_folder/includes/library.php");
$fields = ft_api_init_form_page();
ft_api_clear_form_sessions();
?>
<html>
<head>
  <title>Donation Form</title>
  <link rel="stylesheet" type="text/css" href="includes/main.css">
</head>
<body>

  <h1>Thank you!</h1>

  <p>
    Your donation has been processed - thanks very much for supporting us!
  </p>

  <table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr> 
    <td class="highlight" width="120">Order Number:</td>
    <td><?php echo @$_POST["txn_id"]?></td>
  </tr>
  <tr> 
    <td class="highlight">Date:</td>
    <td><?php echo @$_POST["payment_date"]?></td>
  </tr>
  <tr> 
    <td class="highlight">First Name:</td>
    <td><?php echo @$_POST["first_name"]?></td>
  </tr>
  <tr> 
    <td class="highlight">Last Name:</td>
    <td><?php echo @$_POST["last_name"]?></td>
  </tr>
  <tr> 
    <td class="highlight">Email:</td>
    <td><?php echo @$_POST["payer_email"]?></td>
  </tr>
  </table>

</body>
</html>