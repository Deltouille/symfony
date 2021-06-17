<?php

namespace App\Entity;

use App\Repository\CibleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CibleRepository::class)
 */
class Cible
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $DateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCode;

    /**
     * @ORM\ManyToOne(targetEntity=Nationnalite::class, inversedBy="cibles")
     */
    private $nationnalite;

    /**
     * @ORM\ManyToOne(targetEntity=Mission::class, inversedBy="Cible")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $mission;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getNomCode(): ?string
    {
        return $this->nomCode;
    }

    public function setNomCode(string $nomCode): self
    {
        $this->nomCode = $nomCode;

        return $this;
    }

    public function getNationnalite(): ?Nationnalite
    {
        return $this->nationnalite;
    }

    public function setNationnalite(?Nationnalite $nationnalite): self
    {
        $this->nationnalite = $nationnalite;

        return $this;
    }

    public function getMission(): ?Mission
    {
        return $this->mission;
    }

    public function setMission(?Mission $mission): self
    {
        $this->mission = $mission;

        return $this;
    }
}
