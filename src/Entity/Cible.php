<?php

namespace App\Entity;

use App\Repository\CibleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
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
     * @Assert\NotBlank()
     */
    private $nom;


    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $prenom;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $DateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nomCode;

    /**
     * @ORM\ManyToOne(targetEntity=Nationnalite::class, inversedBy="cibles")
     * @Assert\NotBlank()
     */
    private $nationnalite;

    /**
     * @ORM\ManyToMany(targetEntity=Mission::class, mappedBy="Cible")
     * @ORM\JoinColumn(onDelete="SET NULL")
     * @Assert\NotBlank()
     */
    private $mission;

    public function __construct()
    {
        $this->mission = new ArrayCollection();
    }

    /**
     * @Assert\Callback
     */
    public function validationNationnaliteCibleMission(ExecutionContextInterface $context)
    {
        $bool = false;
        if($this->getMissions() !== null)
        foreach($this->getMissions() as $mission){
           if($mission->getPays()->getNom() !== $this->getNationnalite()->getPays()->getNom()){
               $bool = true;
           }
        }
        if($bool == true){
            $context->buildViolation('Impossible d\' ajouter ou de modifier cette Cible car la nationnalité selectionné est différente de celle du pays de la mission')->addViolation();
        }
    }

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

    /**
     * @return Collection|Mission[]
     */
    public function getMissions(): Collection
    {
        return $this->mission;
    }

    public function setMission(?Mission $mission): self
    {
        $this->mission = $mission;

        return $this;
    }

    public function addMission(Mission $mission): self
    {
        if (!$this->mission->contains($mission)) {
            $this->mission[] = $mission;
            $mission->addCible($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        $this->mission->removeElement($mission);
        $mission->removeCible($this);

        return $this;
    }

    /**
     * @return Collection|Mission[]
     */
    public function getMission(): Collection
    {
        return $this->mission;
    }
}
