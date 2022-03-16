<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Entity\LegendaryHero;
use App\Entity\Race;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegendaryHeroController extends AbstractController
{
    /**
     * @Route("/legendary_hero/{id}", name="legendary_hero")
     */

    public function index(EntityManagerInterface $em, int $id, Request $request): Response
    {
        $legendary_hero = $em->getRepository(LegendaryHero::class)->findOneById($id);

        $races = $em->getRepository(Race::class)->findAll();
        $legendary_heros = $em->getRepository(LegendaryHero::class)->findAll();
        $heros = $em->getRepository(Hero::class)->findAll();

        $new_legendary_hero = new LegendaryHero();
        $data=$request->request->all();

        if(count($data) > 0){
            $new_legendary_hero->setName($data["name"]);
            $new_legendary_hero->setGallery($data["gallery"]);
            $new_legendary_hero->setDescription($data["description"]);
            $new_legendary_hero->setAttribut($data["attribut"]);
            $new_legendary_hero->setAbilitie($data["abilitie"]);
            $new_legendary_hero->setLordsEffects($data["lords_effects"]);
            $new_legendary_hero->setItems($data["items"]);
            $new_legendary_hero->setMounts($data["mounts"]);
            $new_legendary_hero->setParticularity($data["particularity"]);
            $new_legendary_hero->setStrategy($data["strategy"]);
            $new_legendary_hero->setHealth($data["health"]);
            $new_legendary_hero->setLeadership($data["leadership"]);
            $new_legendary_hero->setMeleeAttack($data["melee_attack"]);
            $new_legendary_hero->setMeleeDefence($data["melee_defence"]);
            $new_legendary_hero->setChargeBonus($data["charge_bonus"]);
            $new_legendary_hero->setMissileResistance($data["missile_resistance"]);
            $new_legendary_hero->setWeaponDamage($data["weapon_damage"]);
            $new_legendary_hero->setArmourPiercingDamage($data["armour_piercing_damage"]);
            $new_legendary_hero->setMissileDamage($data["missile_damage"]);
            $new_legendary_hero->setArmourPiercingMissileDamage($data["armour_piercing_missile_damage"]);
            $new_legendary_hero->setExplosiveDamage($data["explosive_damage"]);
            $new_legendary_hero->setExplosiveArmourPiercingDamage($data["explosive_armour_piercing_damage"]);
            $new_legendary_hero->setReloadTime($data["reload_time"]);
            $new_legendary_hero->setAmmunition($data["ammunition"]);
            $new_legendary_hero->setRangeShot($data["range_shot"]);
            $new_legendary_hero->setMagicalAttacks($data["magical_attacks"]);
            $new_legendary_hero->setFlamingAttacks($data["flaming_attacks"]);
            $new_legendary_hero->setBonusVsLarge($data["bonus_vs_large"]);
            $em->persist($new_legendary_hero);
            $em->flush();
        }

        return $this->render('legendary_hero/index.html.twig', [
            'controller_name' => 'RaceController',
            'legendary_hero' => $legendary_hero,
            'races' => $races,
            'legendary_heros' => $legendary_heros,
            'heros' => $heros,
        ]);
    }

    /**
     * @Route("/delete_legendary_hero/{id}", name="delete_legendary_hero")
     */
    public function delete_legendary_hero($id, EntityManagerInterface $em): Response
    {

        $legendary_hero=$em->getRepository(LegendaryHero::class)->findOneBy(['id'=>$id]);
        $em->remove($legendary_hero);
        $em->flush();

        return  $this->redirectToRoute("index",[], Response::HTTP_SEE_OTHER);
    }
}
