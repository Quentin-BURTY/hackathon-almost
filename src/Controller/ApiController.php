<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api', name: 'api_')]
class ApiController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(UserRepository $userRepository, SerializerInterface $serializer): Response
    {
        return new JsonResponse($serializer->serialize($userRepository->findBy([], null, 50), 'json'), 200, [], true);
    }

    #[Route('/test', name: 'test')]
    public function test(UserRepository $userRepository, SerializerInterface $serializer): Response
    {
        return new JsonResponse($serializer->serialize($userRepository->findBy([], null, 50), 'json'), 200, [], true);
    }
}
