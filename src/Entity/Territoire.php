<?php

namespace App\Entity;

use App\Repository\TerritoireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TerritoireRepository::class)
 */
class Territoire
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
    private $territoire_libelle;

    /**
     * @ORM\Column(type="integer")
     */
    private $territoire_cp;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTerritoireLibelle(): ?string
    {
        return $this->territoire_libelle;
    }

    public function setTerritoireLibelle(string $territoire_libelle): self
    {
        $this->territoire_libelle = $territoire_libelle;

        return $this;
    }

    public function getTerritoireCp(): ?int
    {
        return $this->territoire_cp;
    }

    public function setTerritoireCp(int $territoire_cp): self
    {
        $this->territoire_cp = $territoire_cp;

        return $this;
    }
}
