<?php

namespace App\Entity;

use App\Repository\HeroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HeroRepository::class)
 */
class Hero
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $gallery;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $attributs;

    /**
     * @ORM\Column(type="text")
     */
    private $abilities;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $mounts;

    /**
     * @ORM\Column(type="text")
     */
    private $strategy;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $health;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $leadership;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $melee_attack;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $melee_defence;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $charge_bonus;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $missile_resistance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $weapon_damage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $armour_piercing_damage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bonus_vs_large;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $missile_damage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $armour_piercing_missile_damage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $explosive_damage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $explosive_armour_piercing_damage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reload_time;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ammunition;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $range_shot;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $magical_attacks;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $flaming_attacks;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getGallery(): ?string
    {
        return $this->gallery;
    }

    public function setGallery(string $gallery): self
    {
        $this->gallery = $gallery;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAttributs(): ?string
    {
        return $this->attributs;
    }

    public function setAttributs(string $attributs): self
    {
        $this->attributs = $attributs;

        return $this;
    }

    public function getAbilities(): ?string
    {
        return $this->abilities;
    }

    public function setAbilities(string $abilities): self
    {
        $this->abilities = $abilities;

        return $this;
    }

    public function getMounts(): ?string
    {
        return $this->mounts;
    }

    public function setMounts(?string $mounts): self
    {
        $this->mounts = $mounts;

        return $this;
    }

    public function getStrategy(): ?string
    {
        return $this->strategy;
    }

    public function setStrategy(string $strategy): self
    {
        $this->strategy = $strategy;

        return $this;
    }

    public function getHealth(): ?string
    {
        return $this->health;
    }

    public function setHealth(string $health): self
    {
        $this->health = $health;

        return $this;
    }

    public function getLeadership(): ?string
    {
        return $this->leadership;
    }

    public function setLeadership(string $leadership): self
    {
        $this->leadership = $leadership;

        return $this;
    }

    public function getMeleeAttack(): ?string
    {
        return $this->melee_attack;
    }

    public function setMeleeAttack(string $melee_attack): self
    {
        $this->melee_attack = $melee_attack;

        return $this;
    }

    public function getMeleeDefence(): ?string
    {
        return $this->melee_defence;
    }

    public function setMeleeDefence(string $melee_defence): self
    {
        $this->melee_defence = $melee_defence;

        return $this;
    }

    public function getChargeBonus(): ?string
    {
        return $this->charge_bonus;
    }

    public function setChargeBonus(string $charge_bonus): self
    {
        $this->charge_bonus = $charge_bonus;

        return $this;
    }

    public function getMissileResistance(): ?string
    {
        return $this->missile_resistance;
    }

    public function setMissileResistance(string $missile_resistance): self
    {
        $this->missile_resistance = $missile_resistance;

        return $this;
    }

    public function getWeaponDamage(): ?string
    {
        return $this->weapon_damage;
    }

    public function setWeaponDamage(string $weapon_damage): self
    {
        $this->weapon_damage = $weapon_damage;

        return $this;
    }

    public function getArmourPiercingDamage(): ?string
    {
        return $this->armour_piercing_damage;
    }

    public function setArmourPiercingDamage(string $armour_piercing_damage): self
    {
        $this->armour_piercing_damage = $armour_piercing_damage;

        return $this;
    }

    public function getBonusVsLarge(): ?string
    {
        return $this->bonus_vs_large;
    }

    public function setBonusVsLarge(string $bonus_vs_large): self
    {
        $this->bonus_vs_large = $bonus_vs_large;

        return $this;
    }

    public function getMissileDamage(): ?string
    {
        return $this->missile_damage;
    }

    public function setMissileDamage(?string $missile_damage): self
    {
        $this->missile_damage = $missile_damage;

        return $this;
    }

    public function getArmourPiercingMissileDamage(): ?string
    {
        return $this->armour_piercing_missile_damage;
    }

    public function setArmourPiercingMissileDamage(?string $armour_piercing_missile_damage): self
    {
        $this->armour_piercing_missile_damage = $armour_piercing_missile_damage;

        return $this;
    }

    public function getExplosiveDamage(): ?string
    {
        return $this->explosive_damage;
    }

    public function setExplosiveDamage(?string $explosive_damage): self
    {
        $this->explosive_damage = $explosive_damage;

        return $this;
    }

    public function getExplosiveArmourPiercingDamage(): ?string
    {
        return $this->explosive_armour_piercing_damage;
    }

    public function setExplosiveArmourPiercingDamage(?string $explosive_armour_piercing_damage): self
    {
        $this->explosive_armour_piercing_damage = $explosive_armour_piercing_damage;

        return $this;
    }

    public function getReloadTime(): ?string
    {
        return $this->reload_time;
    }

    public function setReloadTime(?string $reload_time): self
    {
        $this->reload_time = $reload_time;

        return $this;
    }

    public function getAmmunition(): ?string
    {
        return $this->ammunition;
    }

    public function setAmmunition(?string $ammunition): self
    {
        $this->ammunition = $ammunition;

        return $this;
    }

    public function getRangeShot(): ?string
    {
        return $this->range_shot;
    }

    public function setRangeShot(?string $range_shot): self
    {
        $this->range_shot = $range_shot;

        return $this;
    }

    public function getMagicalAttacks(): ?string
    {
        return $this->magical_attacks;
    }

    public function setMagicalAttacks(?string $magical_attacks): self
    {
        $this->magical_attacks = $magical_attacks;

        return $this;
    }

    public function getFlamingAttacks(): ?string
    {
        return $this->flaming_attacks;
    }

    public function setFlamingAttacks(?string $flaming_attacks): self
    {
        $this->flaming_attacks = $flaming_attacks;

        return $this;
    }
}
