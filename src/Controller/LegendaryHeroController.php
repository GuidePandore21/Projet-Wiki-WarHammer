<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Entity\LegendaryHero;
use App\Entity\Race;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegendaryHeroController extends AbstractController
{
    /**
     * @Route("/legendary_hero/{id}", name="legendary_hero")
     */

    public function index(ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();

        $legendary_hero = $em->getRepository(LegendaryHero::class)->findOneById($id);

        $races = $em->getRepository(Race::class)->findAll();
        $legendary_heros = $em->getRepository(LegendaryHero::class)->findAll();
        $heros = $em->getRepository(Hero::class)->findAll();

        return $this->render('legendary_hero/index.html.twig', [
            'controller_name' => 'RaceController',
            'legendary_hero' => $legendary_hero,
            'races' => $races,
            'legendary_heros' => $legendary_heros,
            'heros' => $heros,
        ]);
    }
}
