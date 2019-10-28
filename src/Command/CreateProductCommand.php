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
use App\Service\Product;

class CreateProductCommand extends Command {

    private $product;

    public function __construct(Product $product) {
        $this->product = $product;
        parent::__construct();
    }

    protected function configure() {
        $this->setName('app:create-product')
                ->addArgument('prod_type', InputArgument::REQUIRED)
                ->setDescription('Custom command to create a new product');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
        $prodType = $input->getArgument('prod_type');
        $output->writeln($this->product->list());
        $output->writeln($prodType);
    }

}
