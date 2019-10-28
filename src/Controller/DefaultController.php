<?php

/**
 * Description of DefaultController
 *
 * @author satish
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController {

    /**
     * @Route("/default", name="default_index");
     * 
     * @return Response
     */
    public function index() {
        $data = ['data' => 'Home page'];
        return $this->json($data);
    }

}
