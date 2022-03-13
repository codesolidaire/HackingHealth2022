<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PatientRepository::class)
 */
class Patient
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
    private $patient_nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $patient_prenom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $patient_telephone;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $patient_adresse_map;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $patient_instruction;

    /**
     * @ORM\ManyToOne(targetEntity=Territoire::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $territoire_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPatientNom(): ?string
    {
        return $this->patient_nom;
    }

    public function setPatientNom(string $patient_nom): self
    {
        $this->patient_nom = $patient_nom;

        return $this;
    }

    public function getPatientPrenom(): ?string
    {
        return $this->patient_prenom;
    }

    public function setPatientPrenom(string $patient_prenom): self
    {
        $this->patient_prenom = $patient_prenom;

        return $this;
    }

    public function getPatientTelephone(): ?int
    {
        return $this->patient_telephone;
    }

    public function setPatientTelephone(?int $patient_telephone): self
    {
        $this->patient_telephone = $patient_telephone;

        return $this;
    }

    public function getPatientAdresseMap(): ?string
    {
        return $this->patient_adresse_map;
    }

    public function setPatientAdresseMap(string $patient_adresse_map): self
    {
        $this->patient_adresse_map = $patient_adresse_map;

        return $this;
    }

    public function getPatientInstruction(): ?string
    {
        return $this->patient_instruction;
    }

    public function setPatientInstruction(?string $patient_instruction): self
    {
        $this->patient_instruction = $patient_instruction;

        return $this;
    }

    public function getTerritoireId(): ?Territoire
    {
        return $this->territoire_id;
    }

    public function setTerritoireId(?Territoire $territoire_id): self
    {
        $this->territoire_id = $territoire_id;

        return $this;
    }
}
