<?php

namespace App\Controller;

use App\Entity\Hero;
use App\Entity\LegendaryHero;
use App\Entity\MagicDomain;
use App\Entity\Race;
use App\Entity\Spell;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeroController extends AbstractController
{
    /**
     * @Route("/hero/{id}", name="hero")
     */
    public function index(EntityManagerInterface $em, int $id, Request $request): Response
    {
        // recherche dans la BDD par id un hero
        $hero = $em->getRepository(Hero::class)->findOneById($id);

        // recherche dans la BDD de tous entitées dans les classes pour la navbar
        $races = $em->getRepository(Race::class)->findAll();
        $legendary_heros = $em->getRepository(LegendaryHero::class)->findAll();
        $heros = $em->getRepository(Hero::class)->findAll();

        // instanciation du nouveau hero
        $new_hero = new Hero();
        $data=$request->request->all();

        // implémentations des différents valeurs attribué au hero via le form
        if(count($data) > 0){
            $new_hero->setName($data["name"]);
            $new_hero->setGallery($data["gallery"]);
            $new_hero->setDescription($data["description"]);
            $new_hero->setAbilities($data["abilities"]);
            $new_hero->setMounts($data["mounts"]);
            $new_hero->setStrategy($data["strategy"]);
            $new_hero->setHealth($data["health"]);
            $new_hero->setLeadership($data["leadership"]);
            $new_hero->setMeleeAttack($data["melee_attack"]);
            $new_hero->setMeleeDefence($data["melee_defence"]);
            $new_hero->setChargeBonus($data["charge_bonus"]);
            $new_hero->setMissileResistance($data["missile_resistance"]);
            $new_hero->setWeaponDamage($data["weapon_damage"]);
            $new_hero->setArmourPiercingDamage($data["armour_piercing_damage"]);
            $new_hero->setMissileDamage($data["missile_damage"]);
            $new_hero->setArmourPiercingMissileDamage($data["armour_piercing_missile_damage"]);
            $new_hero->setExplosiveDamage($data["explosive_damage"]);
            $new_hero->setExplosiveArmourPiercingDamage($data["explosive_armour_piercing_damage"]);
            $new_hero->setReloadTime($data["reload_time"]);
            $new_hero->setAmmunition($data["ammunition"]);
            $new_hero->setRangeShot($data["range_shot"]);
            $new_hero->setMagicalAttacks($data["magical_attacks"]);
            $new_hero->setFlamingAttacks($data["flaming_attacks"]);
            $new_hero->setBonusVsLarge($data["bonus_vs_large"]);
            $em->persist($new_hero);
            $em->flush();
        }

        return $this->render('hero/index.html.twig', [
            'controller_name' => 'HeroController',
            'hero' => $hero,
            'races' => $races,
            'legendary_heros' => $legendary_heros,
            'heros' => $heros,
        ]);
    }

    /**
     * @Route("/delete_hero/{id}", name="delete_hero")
     */
    public function delete_hero($id, EntityManagerInterface $em): Response
    {

        // permet de delete le hero
        $hero=$em->getRepository(Hero::class)->findOneBy(['id'=>$id]);
        $em->remove($hero);
        $em->flush();

        return  $this->redirectToRoute("index",[], Response::HTTP_SEE_OTHER);
    }
}
