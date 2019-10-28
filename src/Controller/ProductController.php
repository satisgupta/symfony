<?php

/**
 * Description of ProductController
 *
 * @author satish
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class ProductController extends AbstractController {

    /**
     * @Route("/product", name="product_list");
     */
    public function index(LoggerInterface $logger) {
        $logger->info('load product list');
        $data = ['data' => 'product list'];
        return $this->json($data);
    }

    /**
     * @Route("/product/{slug}", name="product_detail")
     */
    public function detail($slug) {
        $data = $slug;
        return $this->json($data);
    }

}
