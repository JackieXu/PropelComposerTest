<?php

// Load vendor (i.e. the requires in composer.json) stuff
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config/propel.php';

$foo = new Foo();
$foo->setBaz('bar');
$foo->save();

$fooQuery = new FooQuery();
$firstFoo = $fooQuery->findPK(1);
var_dump($firstFoo);