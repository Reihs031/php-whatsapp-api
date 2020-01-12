<?php
namespace CarlosIO\WhatsApp\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class BaseCommand extends Command
{
    protected function configure()
    {
        $this
            ->addArgument('sender',   InputArgument::REQUIRED, '491703195226')
            ->addArgument('imei',     InputArgument::REQUIRED, '9C:E6:5E:11:75:19')
            ->addArgument('nickname', InputArgument::REQUIRED, 'Sender nickname');
    }
} [xyz-ihs snippet=“ad“]
