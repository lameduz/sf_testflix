<?php

namespace MoviesBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Goutte\Client;

class AppMyLinkCrawlerCommand extends ContainerAwareCommand
{
    protected $client;
    protected $crawler;
    protected $page;
    protected $query;
    protected $year;

    protected function configure()
    {
        $this
            ->setName('app:my-link-crawler')
            ->setDescription('...')
            ->addArgument('query', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $query = $input->getArgument('query');
        #$year = $input->getArgument('year');

        #$this->setYear($year);
        $output->writeln('Command result : ');
        $this->crawler();
    }
    protected function crawler()
    {
        $this->client = new Client(['http://streamay.bz']);

    }
    protected function setYear($year)
    {
        $this->year = $year;
    }
}
