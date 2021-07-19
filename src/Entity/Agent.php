<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgentRepository::class)
 */
class Agent
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
    private $codeIdentification;

    /**
     * @ORM\ManyToMany(targetEntity=Mission::class, mappedBy="Agent")
     * @ORM\JoinColumn(onDelete="SET NULL")
     * @Assert\NotBlank()
     */
    private $missions;

    /**
     * @ORM\ManyToOne(targetEntity=Nationnalite::class, inversedBy="agents")
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
     */
    private $Nationnalite;

    /**
     * @ORM\ManyToMany(targetEntity=Specialite::class, mappedBy="agent")
     */
    private $specialites;

    public function __construct()
    {
        $this->missions = new ArrayCollection();
        $this->specialites = new ArrayCollection();
    }

    /**
     * @Assert\Callback
     */
    public function validationNationnaliteAgentMission(ExecutionContextInterface $context)
    {
        $bool = false;
        $listeMission = array();
        if($this->getMissions() !== null)
        foreach($this->getMissions() as $mission){
            foreach($mission->getCible() as $cible){
                if($this->getNationnalite()->getNomNatio() == $cible->getNationnalite()->getNomNatio()){
                    $bool = true;
                    array_push($listeMission, $mission->getTitre());
                }
            }
        }
        if($bool == true){
            $context->buildViolation('Impossible d\'ajouter cet agent car les missions selectionnées : '.implode(", ", $listeMission). ' ont une ou plusieurs cibles qui ont la même nationnalité que l\'agent selectionné')->addViolation();
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

    public function getCodeIdentification(): ?string
    {
        return $this->codeIdentification;
    }

    public function setCodeIdentification(string $codeIdentification): self
    {
        $this->codeIdentification = $codeIdentification;

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
            $mission->addAgent($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        if ($this->missions->removeElement($mission)) {
            $mission->removeAgent($this);
        }

        return $this;
    }

    public function getNationnalite(): ?Nationnalite
    {
        return $this->Nationnalite;
    }

    public function setNationnalite(?Nationnalite $Nationnalite): self
    {
        $this->Nationnalite = $Nationnalite;

        return $this;
    }

    /**
     * @return Collection|Specialite[]
     */
    public function getSpecialites(): Collection
    {
        return $this->specialites;
    }

    public function addSpecialite(Specialite $specialite): self
    {
        if (!$this->specialites->contains($specialite)) {
            $this->specialites[] = $specialite;
            $specialite->addAgent($this);
        }

        return $this;
    }

    public function removeSpecialite(Specialite $specialite): self
    {
        if ($this->specialites->removeElement($specialite)) {
            $specialite->removeAgent($this);
        }

        return $this;
    }
}
