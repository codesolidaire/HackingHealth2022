<?php

namespace App\Entity;

use App\Repository\SoignantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SoignantRepository::class)
 */
class Soignant
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
    private $soignant_nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soignant_prenom;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $soignant_initial;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSoignantNom(): ?string
    {
        return $this->soignant_nom;
    }

    public function setSoignantNom(string $soignant_nom): self
    {
        $this->soignant_nom = $soignant_nom;

        return $this;
    }

    public function getSoignantPrenom(): ?string
    {
        return $this->soignant_prenom;
    }

    public function setSoignantPrenom(string $soignant_prenom): self
    {
        $this->soignant_prenom = $soignant_prenom;

        return $this;
    }

    public function getSoignantInitial(): ?string
    {
        return $this->soignant_initial;
    }

    public function setSoignantInitial(string $soignant_initial): self
    {
        $this->soignant_initial = $soignant_initial;

        return $this;
    }
}
