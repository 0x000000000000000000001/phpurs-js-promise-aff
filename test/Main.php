<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$helloPromise = new \Promise\Internal\PhpursPromise();
$helloPromise->resolve("Hello");

$goodbyePromise = new \Promise\Internal\PhpursPromise();
$goodbyePromise->reject("Goodbye");

$errPromise = new \Promise\Internal\PhpursPromise();
$errPromise->reject(new \Exception('err'));

$customErrPromise = new \Promise\Internal\PhpursPromise();
$customErrPromise->reject((object)['code' => "err"]);

return [
    'helloPromise' => $helloPromise,
    'goodbyePromise' => $goodbyePromise,
    'errPromise' => $errPromise,
    'customErrPromise' => $customErrPromise
];
