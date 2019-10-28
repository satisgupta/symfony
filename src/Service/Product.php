<?php

/**
 * Description of Product
 *
 * @author satish
 */

namespace App\Service;

use Psr\Log\LoggerInterface;

class Product {

    private $logger;

    public function __construct(LoggerInterface $logger) {
        $this->logger = $logger;
    }

    public function list() {
        $this->logger->info('list product');
        $this->logger->debug('list product debug');
        $this->logger->error('list product error');
        echo "list product";
    }

}
