<?php

namespace App\Controller;

use App\Dto\TypeDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

final class TypeController extends AbstractController
{
    #[Route('/type', methods: ['POST'])]
    public function __invoke(#[MapRequestPayload]TypeDto $dto): Response
    {
        return new JsonResponse($dto);
    }
}
