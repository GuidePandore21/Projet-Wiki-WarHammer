<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Entity\LegendaryHero;
use App\Entity\Race;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaceController extends AbstractController
{
    /**
     * @Route("/race/{id}", name="race")
     */

    public function index(ManagerRegistry $doctrine, int $id): Response
    {
        $em = $doctrine->getManager();

        $race = $em->getRepository(Race::class)->findOneById($id);

        $races = $em->getRepository(Race::class)->findAll();
        $legendary_heros = $em->getRepository(LegendaryHero::class)->findAll();
        $heros = $em->getRepository(Hero::class)->findAll();

        return $this->render('race/index.html.twig', [
            'controller_name' => 'RaceController',
            'race' => $race,
            'races' => $races,
            'legendary_heros' => $legendary_heros,
            'heros' => $heros,
        ]);
    }
}
