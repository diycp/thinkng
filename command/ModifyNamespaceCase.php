<?php
namespace Command;

use Slince\Console\Command;
use Slince\Console\Context\Io;
use Slince\Console\Context\Argv;
use Symfony\Component\Finder\Finder;

class ModifyNamespaceCase extends Command
{
    function getName()
    {
        return 'namespace-case';
    }
    
    function execute(Io $io, Argv $argv)
    {
        $rootPath = __DIR__ . '/../src/';
        $finder = new Finder();
        $files = $finder->files()->name('*.php')->in($rootPath);
        foreach ($files as $file) {
            $io->writeln($file->getRealPath());
            $content = file_get_contents($file->getRealPath());
            $handledContent = preg_replace_callback('#[Tt]hink\\\\(\w+)(\\\\(\w+))*#', function(& $matches){
                $replace = 'Think\\' . ucfirst($matches[1]);
                if (! empty($matches[2])) {
                    $replace .= '\\' . ucfirst($matches[2]);
                }
                var_dump($replace);exit;
            }, $content);
        }
    }
}