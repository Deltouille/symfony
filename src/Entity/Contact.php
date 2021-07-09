<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
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
     * @ORM\ManyToMany(targetEntity=Mission::class, mappedBy="contact")
     * @ORM\JoinColumn(onDelete="SET NULL")
     * @Assert\NotBlank()
     */
    private $missions;

    /**
     * @ORM\ManyToOne(targetEntity=Nationnalite::class, inversedBy="contacts")
     * @Assert\NotBlank()
     */
    private $nationnalite;

    public function __construct()
    {
        $this->missions = new ArrayCollection();
    }

    /**
     * @Assert\Callback
     */
    public function validationNationnaliteContactMission(ExecutionContextInterface $context)
    {
        $bool = false;
        $listeMission = array();
        if($this->getMissions() !== null)
        foreach($this->getMissions() as $mission){
           if($mission->getPays()->getNom() !== $this->getNationnalite()->getPays()->getNom()){
               $bool = true;
           }
        }
        if($bool == true){
            $context->buildViolation('Impossible d\' ajouter ou de modifier ce contact car la nationnalité selectionné est différente de celle du pays de la mission')->addViolation();
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

    /**
     * @return Collection|Mission[]
     */
    public function getMissions(): Collection
    {
        return $this->missions;
    }

    public function addMission(Mission $mission): self
    {
        if (!$this->missions->contains($mission)) {
            $this->missions[] = $mission;
            $mission->addContact($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        if ($this->missions->removeElement($mission)) {
            $mission->removeContact($this);
        }

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
}
