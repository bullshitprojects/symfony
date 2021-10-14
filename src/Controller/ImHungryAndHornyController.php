<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImHungryAndHornyController extends AbstractController
{
    #[Route('/im/hungry/and/horny', name: 'im_hungry_and_horny')]
    public function index(): Response
    {
        return $this->render('im_hungry_and_horny/index.html.twig', [
            'controller_name' => 'ImHungryAndHornyController',
        ]);
    }
}
