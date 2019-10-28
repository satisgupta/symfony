<?php

/**
 * Description of DefaultController
 *
 * @author satish
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {

    /**
     * @Route("/default");
     * 
     * @return Response
     */
    public function index() {
        return new Response('Default');
    }

}
