<?php
if (isset($_REQUEST['submitted']))
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $comments = $_REQUEST['comments'];


    $to = "36prunsterroadyorkwa@gmail.com";
    // $to = "andrew.laws@iinet.net.au";
    $from = "" . $email . "";
    $subject = "Interest in 36 Prunster Road, York, Western Australia";
    $message = "" . $name . ": " . $comments . " Ph: " . $phone . "";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/plain;charset=UTF-8" . "\r\n";
    $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";
    // =====================================================================
    // DISABLED FOR NOW!!!
    // =====================================================================
    // mail($to,$subject,$message,$headers);


    echo '<html><head></head><body>Thanks for your interest!</body></html>';
}
else
{
    echo '<html><head></head><body>Something went wrong!!</body></html>';
}
?>