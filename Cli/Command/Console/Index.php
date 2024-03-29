<?php


namespace Lunatic\Cli\Command\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class Index extends Command
{


    const CUSTOMERNAME = 'Name';

    protected function configure()
    {
        $commandoptions = [new InputOption(self::CUSTOMERNAME, null, InputOption::VALUE_REQUIRED, 'Name')];
        $this->setName('Lunatic:Hi');
        $this->setDescription('Demo command line');
        $this->setDefinition($commandoptions);

        parent::configure();
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($customername = $input->getOption(self::CUSTOMERNAME))
        {
            $output->writeln("Hi ".$customername);
        }
        else
        {
            $output->writeln("Hi Customer");
        }

    }
}
