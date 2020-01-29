<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index( AnnonceRepository $annonceRepository )
    {
        // Je récupere les 6 dernieres annonces par leur id par ordre décroissant
        $annonces = $annonceRepository->findBy([], ['id' => 'DESC'], 6);

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }

    /**
     * @Route("/annonces", name="annonce")
     */
    public function list( AnnonceRepository $annonceRepository )
    {
        // Je récupère toutes les annonces de mon entité Annonce
        $annonces = $annonceRepository->findAll();

        return $this->render('annonce/index.html.twig', [
            'annonces' => $annonces,
        ]);
    }

    /**
     * @Route("/annonces/{id}", name="annonce_show")
     */
    public function show($id, AnnonceRepository $annonceRepository)
    {
        // je récupere les informations de mon annonces
        $annonce = $annonceRepository->find($id);

        // si l'annonce n'existe pas je redirige vers une page 404
        if($annonce == null) {
            throw $this->createNotFoundException('La page demandée n\'existe pas');
        }

        return $this->render('annonce/annonce_show.html.twig', [
            'annonce' => $annonce,
        ]);
    }
}
