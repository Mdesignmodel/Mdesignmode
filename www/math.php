<?php
define('DIR', __DIR__ . '/..');

require_once DIR . '/console/Platform.php';

$s = \console\Platform::compute(1,2,'+');