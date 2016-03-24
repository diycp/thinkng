<?php
use Slince\Console\Console;
use Command\ModifyNamespaceCase;

include __DIR__ . '/../vendor/autoload.php';

$console = new Console();
$console->addCommands([
    new ModifyNamespaceCase()
]);
$console->run();