<?php
define('DIR', __DIR__ . '/..');

require_once DIR . '/Decorator/Client.php';
require_once DIR . '/Decorator/Person.php';
require_once DIR . '/Decorator/Model/Decorator.php';
require_once DIR . '/Decorator/Model/Decorator/Coat.php';
require_once DIR . '/Decorator/Model/Decorator/Pants.php';
require_once DIR . '/Decorator/Model/Decorator/Hat.php';


$client = new Client();
$client->indexAction();