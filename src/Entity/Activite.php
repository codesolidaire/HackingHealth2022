<?php

namespace App\Entity;

use App\Repository\ActiviteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 */
class Activite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $activite_libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActiviteLibelle(): ?string
    {
        return $this->activite_libelle;
    }

    public function setActiviteLibelle(string $activite_libelle): self
    {
        $this->activite_libelle = $activite_libelle;

        return $this;
    }
}
