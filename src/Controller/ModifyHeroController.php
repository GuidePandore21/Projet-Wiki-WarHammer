<?php

namespace App\Controller;

use App\Entity\Hero;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModifyHeroController extends AbstractController
{
    /**
     * @Route("/modify/hero", name="app_modify_hero")
     */
    public function index(EntityManagerInterface $em, int $id, Request $request): Response
    {
        $hero = $em->getRepository(Hero::class)->findOneById($id);

        $new_hero = new Hero();
        $data=$request->request->all();

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

        return $this->render('modify_hero/index.html.twig', [
            'controller_name' => 'ModifyHeroController',
            'hero' => $hero,
        ]);
    }
}
