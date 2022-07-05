<?php

spl_autoload_register();

use Singleton\Settings;

$a = Settings::get();
$a->item = 20;

echo Settings::get()->item, '<br />';

$b = Settings::get();
$b->value = 30;

echo Settings::get()->value, '<br />';