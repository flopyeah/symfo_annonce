<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{

    /**
     * @Route("/categories", name="categorie")
     */
    public function index(CategorieRepository $categorieRepository)
    {
        // Je récupere toutes les catégories
        $categories = $categorieRepository->findAll();

        return $this->render('categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/categories/{id}", name="categorie_show")
     */
    public function show($id, CategorieRepository $categoryRepository, AnnonceRepository $annonceRepository)
    {
        // Je récupere les informations de la catégorie et les annonces associées
        $categorie = $categoryRepository->find($id);
        
        // OU je récupere les annonces par l'id de la catégorie
        //$annonceRepository->findBy(['categorie' => $id]);


        return $this->render('categorie/categorie_show.html.twig', [
            'categorie' => $categorie
        ]);
    }
}
