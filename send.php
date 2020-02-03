<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Bridge\Amazon\Transport\SesApiTransport;

$AWS_ACCESS_KEY_ID = 'XXXXXX';
$AWS_ACCESS_SECRET_KEY = 'XXXXXX';
$AWS_REGION = 'ap-southeast-2';

$transport = new SesApiTransport($AWS_ACCESS_KEY_ID, $AWS_ACCESS_SECRET_KEY, $AWS_REGION);

$email = (new Email())
    ->addTo('foobar@gmail.com')
    ->addFrom('test@example.com')
    ->text('Testing..');

$transport->send($email);
