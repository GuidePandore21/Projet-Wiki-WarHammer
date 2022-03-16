<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Entity\LegendaryHero;
use App\Entity\Race;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminPageController extends AbstractController
{
    /**
     * @Route("/admin/page", name="app_admin_page")
     */

    public function index(EntityManagerInterface $em): Response
    {
        $races = $em->getRepository(Race::class)->findAll();
        $legendary_heros = $em->getRepository(LegendaryHero::class)->findAll();
        $heros = $em->getRepository(Hero::class)->findAll();

        return $this->render('admin_page/index.html.twig', [
            'controller_name' => 'AdminPageController',
            'races' => $races,
            'legendary_heros' => $legendary_heros,
            'heros' => $heros,
        ]);
    }
}
