<?php

namespace App\Controller;

use App\Entity\Race;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifyRaceController extends AbstractController
{
    /**
     * @Route("/modify/race/{id}", name="app_modify_race")
     */
    public function index(EntityManagerInterface $em, int $id, Request $request): Response
    {

        $race = $em->getRepository(Race::class)->findOneById($id);

        $new_race = new Race();
        $data=$request->request->all();

        if(count($data) > 0){
            $race=$em->getRepository(Race::class)->findOneBy(['id'=>$id]);
            $em->remove($race);
            $em->flush();

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

        return $this->render('modify_race/index.html.twig', [
            'controller_name' => 'ModifyRaceController',
            'race' => $race,
        ]);
    }
}
