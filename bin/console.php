<?php
    use Command\ModifyNamespaceCase;
    use Slince\Console\Console;

    include __DIR__ . '/../vendor/autoload.php';

    $console = new Console();
    $console->addCommands([
        new ModifyNamespaceCase(),
    ]);
    $console->run();