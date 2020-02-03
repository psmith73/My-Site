<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "philipm.smith@icloud.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received en email from ".$name.".\n\n".$message;

    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}