<?php

namespace Penguin\Composer;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StartCommand extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('penguin:start');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Executing');
        return 1;
    }
}