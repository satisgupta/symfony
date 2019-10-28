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
     * @Route("/default");
     * 
     * @return Response
     */
    public function index() {
        return $this->render('default/index.html.twig',['data' => 'Home page']);
    }

}
