<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Entity\LegendaryHero;
use App\Entity\Race;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RaceController extends AbstractController
{
    /**
     * @Route("/race/{id}", name="race")
     */

    public function index(EntityManagerInterface $em, int $id, Request $request): Response
    {
        $race = $em->getRepository(Race::class)->findOneById($id);

        $races = $em->getRepository(Race::class)->findAll();
        $legendary_heros = $em->getRepository(LegendaryHero::class)->findAll();
        $heros = $em->getRepository(Hero::class)->findAll();

        $new_race = new Race();
        $data=$request->request->all();

        if(count($data) > 0){
            $new_race->setName($data["name"]);
            $new_race->setGallery($data["gallery"]);
            $new_race->setDescription($data["description"]);
            $new_race->setLore($data["lore"]);
            $new_race->setInBattle($data["in_battle"]);
            $new_race->setInCampaign($data["in_campaign"]);
            $new_race->setStrategy($data["strategy"]);
            $em->persist($new_race);
            $em->flush();
        }

        return $this->render('race/index.html.twig', [
            'controller_name' => 'RaceController',
            'race' => $race,
            'races' => $races,
            'legendary_heros' => $legendary_heros,
            'heros' => $heros,
        ]);
    }

    /**
     * @Route("/delete_race/{id}", name="delete_race")
     */
    public function delete_race($id, EntityManagerInterface $em): Response
    {

        $race=$em->getRepository(Race::class)->findOneBy(['id'=>$id]);
        $em->remove($race);
        $em->flush();

        return  $this->redirectToRoute("index",[], Response::HTTP_SEE_OTHER);
    }


}
