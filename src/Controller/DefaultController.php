<?php

namespace AdminLTEBundle\Controller;

use niklesh\HealthCheckBundle\Service\HealthInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/index")
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->json([]);
    }
}