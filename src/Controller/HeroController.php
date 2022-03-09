<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Entity\LegendaryHero;
use App\Entity\Race;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeroController extends AbstractController
{
    /**
     * @Route("/hero/{id}", name="hero")
     */
    public function index(ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();

        $hero = $em->getRepository(Hero::class)->findOneById($id);

        $races = $em->getRepository(Race::class)->findAll();
        $legendary_heros = $em->getRepository(LegendaryHero::class)->findAll();
        $heros = $em->getRepository(Hero::class)->findAll();

        return $this->render('hero/index.html.twig', [
            'controller_name' => 'HeroController',
            'hero' => $hero,
            'races' => $races,
            'legendary_heros' => $legendary_heros,
            'heros' => $heros,
        ]);
    }
}
