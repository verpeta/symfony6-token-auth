<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class BasicController extends AbstractController
{
    #[Route('/', name: 'secure')]
    public function secure(): JsonResponse
    {
        return $this->json([
            'message' => 'You are in secure area!',
        ]);
    }

    #[Route('/smth', name: 'another_secure')]
    public function another(): JsonResponse
    {
        return $this->json([
            'message' => 'You are also in secure area!',
        ]);
    }

    #[Route('/public', name: 'public')]
    public function public(): JsonResponse
    {
        return $this->json([
            'message' => 'This is public area!',
        ]);
    }
}
