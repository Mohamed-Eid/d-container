<?php

require __DIR__ . '/vendor/autoload.php';

use Bluex\DContainer\Container;
use Bluex\DContainer\Test\Logger;
use Bluex\DContainer\Test\User;

$app = new Container();

$app->set(Logger::class, function () {
    return new Logger();
});

$user = $app->get(User::class);

echo $user->getName();
