<?php

/**
 * Description of DefaultController
 *
 * @author satish
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Product;

class DefaultController extends AbstractController {

    /**
     * @Route("/default", name="default_index");
     * 
     * @return Response
     */
    public function index(Request $request, Product $product) {
        $request->request->get('page');
        $product->list();
        $data = ['data' => 'Home page - On EC2 - Latest Using Elastic Beanstalk - 1'];
        return $this->json($data);
    }

}
