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
            $handledContent = preg_replace_callback('#[Tt]hink(\\\\(\w+))+#', function(& $matches){
                $words = explode('\\', $matches[0]);
                array_walk($words, function(&$word){
                    $word = ucfirst($word);
                });
                return implode('\\', $words);
            }, $content);
            file_put_contents($file->getRealPath(), $handledContent);
        }
    }
}