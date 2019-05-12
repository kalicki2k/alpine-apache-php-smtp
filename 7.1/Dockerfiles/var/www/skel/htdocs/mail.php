<?php

$from = 'From: Docker Container at '. $_SERVER['SERVER_NAME'] .' <no-reply@'. $_SERVER['SERVER_NAME'] .'>';
$to = 'sebastian@kalicki.email';
$subject = 'PHP Mail Test';
$message = 'This is a test to check the PHP Mail functionality.';

mail($to, $subject, $message, $from);
