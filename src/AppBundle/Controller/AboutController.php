<?php

namespace AppBundle\Controller;

use AppBundle\BoardAssets\Board;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AboutController extends Controller
{
    /**
     * @Route("/about", name="about", defaults={"_format": "json"})
     */
    public function aboutAction()
    {
        $board = new Board();
        $board->setBoardName("Example!");

        return new JsonResponse($board);
    }
}
