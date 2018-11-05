<?php
require 'vendor/autoload.php';

$email = new \SendGrid\Mail\Mail();
$email->setFrom("#EMAIL-SENDER", "#SENDER-NAME");
$email->setSubject("#EMAIL-SUBJECT");
$email->addTo("#EMAIL-RECEIVER", "#RECEIVER-NAME");
$email->addContent(
    "text/html", "<strong><u>and easy to do anywhere, even with PHP</u></strong>"
);
$sendgrid = new \SendGrid('#API-KEY-SENDGRID');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
