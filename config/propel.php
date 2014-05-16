<?php

use Propel\Runtime\Propel;
use Propel\Runtime\Connection\ConnectionManagerSingle;

// Get service container and set adapter class
$serviceContainer = Propel::getServiceContainer();
$serviceContainer->setAdapterClass('composer-test', 'mysql');

$manager = new ConnectionManagerSingle();
$manager->setConfiguration(array(
    'dsn'       => 'mysql:host=localhost;dbname=composer-test',
    'user'      => 'root',
    'password'  => ''
));

$serviceContainer->setConnectionManager('composer-test', $manager);