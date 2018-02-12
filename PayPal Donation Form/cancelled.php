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

    <h1>Donation Cancelled</h1>

    <p>
    Your transaction has been cancelled.
    </p>

</body>
</html>
