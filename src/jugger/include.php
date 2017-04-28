<?php

$loader = new jugger\base\Autoloader();
$loader->addNamespace('jugger\\bitrix', __DIR__.'/lib');
$loader->register();
