<?php

namespace App\Entity;

use App\Repository\PlanificationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlanificationRepository::class)
 */
class Planification
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_planif;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="boolean")
     */
    private $piqure;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ordonnance;

    /**
     * @ORM\ManyToOne(targetEntity=Activite::class)
     */
    private $activite_libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatePlanif(): ?\DateTimeInterface
    {
        return $this->date_planif;
    }

    public function setDatePlanif(\DateTimeInterface $date_planif): self
    {
        $this->date_planif = $date_planif;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getPiqure(): ?bool
    {
        return $this->piqure;
    }

    public function setPiqure(bool $piqure): self
    {
        $this->piqure = $piqure;

        return $this;
    }

    public function getOrdonnance(): ?bool
    {
        return $this->ordonnance;
    }

    public function setOrdonnance(bool $ordonnance): self
    {
        $this->ordonnance = $ordonnance;

        return $this;
    }

    public function getActiviteLibelle(): ?Activite
    {
        return $this->activite_libelle;
    }

    public function setActiviteLibelle(?Activite $activite_libelle): self
    {
        $this->activite_libelle = $activite_libelle;

        return $this;
    }
}
