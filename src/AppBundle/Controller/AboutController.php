<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends Controller
{
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
      return $this->render('default/about.html.twig');

      //   return new Response (
      //     '<html><body> About Page </body></html>'
      // );
    }
}

// $html = $this->container->get('templating')->render(
//     'example.html.twig',
// );
// return new Response($html);
