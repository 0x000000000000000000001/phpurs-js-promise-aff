<?php
require_once __DIR__ . '/../phpurs-exceptions/src/Effect/Exception.php';
$exports = require __DIR__ . '/../phpurs-exceptions/src/Effect/Exception.php';
$e = $exports['error']('fail');
var_dump($exports['message']($e));
