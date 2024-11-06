<?php

namespace App\Controller;

use App\Dto\ArrayDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

final class ArrayController extends AbstractController
{
    #[Route('/array', methods: ['POST'])]
    public function __invoke(#[MapRequestPayload]ArrayDto $dto): Response
    {
        return new JsonResponse($dto);
    }
}
