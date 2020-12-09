<?php

namespace HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    

    public function indexAction(): Response
    {
        

        return new Response(
            '<html>
              <body>
              <h1 style="text-align:center">Welcome to the home page</h1>
              </body>
              </html>'
        );
    }
}
