<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index(): Response
    {

        $categories = $this->getDoctrine()->getRepository(Categorie::class)->findAll();
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'categories' => $categories,
            'articles' => $articles,
        ]);
    }
}
