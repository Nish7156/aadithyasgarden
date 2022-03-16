<?php
    $toEmail = "admin@phppot_samples.com";
    $mailHeaders = "From: " . $_POST["fname"] . "<". $_POST["email"] .">\r\n";
    if(mail($toEmail, $_POST["lname"], $_POST["phone"],$_POST["message"], $mailHeaders)) {
        print "<p class='success'>Mail Sent.</p>";
    } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }
?>