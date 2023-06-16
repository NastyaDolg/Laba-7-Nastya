<?php

namespace App\Controller;

use App\Entity\News;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(News::class);
        $news = $repository->findAll();
        return $this->render('index/index.html.twig', [
            'news' => $news,
        ]);
    }
}
