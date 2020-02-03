<?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "philipm.smith@icloud.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have received an email from ".$name.".\n\n".$message;

        
        mail($mailTo, $headers, $txt );
        
    }

?>