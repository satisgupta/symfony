<?php

/**
 * Description of CreateUserCommand
 *
 * @author satish
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class CreateUserCommand extends Command {

    protected function configure() {
        $this->setName('app:create-user')
                ->addArgument('user_id', InputArgument::REQUIRED)
                ->setDescription('Custom command to create a new user');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $userId = $input->getArgument('user_id');
        echo $userId;
    }

}
