<?php

// debug
error_reporting(E_ALL);
ini_set('display_errors', true);

chdir(__DIR__);

require '../vendor/autoload.php';

use Pandi\EPP\Frame\Command\Login;

$frame = new Login();
$frame->setClientId('gunter');
$frame->setPassword('grodotzki');
$frame->setNewPassword('grodotzki2');
$frame->setVersion('1.0');
$frame->setLanguage('en');
$frame->addService('urn:ietf:params:xml:ns:domain-1.0');
$frame->addService('urn:ietf:params:xml:ns:contact-1.0');
echo $frame;
