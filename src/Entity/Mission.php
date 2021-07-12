<?php

namespace App\Entity;

use App\Repository\MissionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=MissionRepository::class)
 */
class Mission
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
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $nomCode;

    /**
     * @ORM\ManyToMany(targetEntity=Agent::class, inversedBy="missions")
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Assert\NotBlank()
     */
    private $Agent;

    /**
     * @ORM\ManyToMany(targetEntity=Contact::class, inversedBy="missions")
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Assert\NotBlank()
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $Statut;

    /**
     * @ORM\ManyToMany(targetEntity=Planque::class, inversedBy="missions")
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Assert\Count(min = 1, max = 1)
     * @Assert\Valid
     */
    private $Planque;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */
    private $dateFin;

    /**
     * @ORM\ManyToMany(targetEntity=Cible::class, inversedBy="mission")
     * @ORM\JoinColumn(onDelete="CASCADE")
     * @Assert\NotBlank()
     */
    private $Cible;

    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="missions")
     */
    private $pays;

    /**
     * @ORM\ManyToOne(targetEntity=Specialite::class, inversedBy="mission")
     */
    private $Specialite;

    public function __construct()
    {
        $this->Agent = new ArrayCollection();
        $this->contact = new ArrayCollection();
        $this->Planque = new ArrayCollection();
        $this->Cible = new ArrayCollection();
    }

    /**
     * @Assert\Callback
     */
    public function validationPlanquePays(ExecutionContextInterface $context){
        $bool = false;
        $listePlanque = array();
        foreach($this->getPlanque() as $planque){
            if($planque->getPays()->getNom() !== $this->getPays()->getNom()){
                $bool = true;
                array_push($listePlanque, $planque->getCode());
            }
        }
        if($bool == true){
            $context->buildViolation('Les planques : '. implode(", ", $listePlanque) .', ne sont pas dans le même pays que celui de la mission')->addViolation();
        }
    }

    /**
     * @Assert\Callback
     */
    public function validationSpecialite(ExecutionContextInterface $context){
        $bool = false;
        $listeAgent = array();
        foreach($this->getAgent() as $agent){
            foreach($agent->getSpecialites() as $Specialite){
                if($Specialite->getNom() == $this->getSpecialite()->getNom()){
                    $bool = false;
                    break;
                }else{
                    $bool = true;
                    array_push($listeAgent, $agent->getNom());
                }
            }
        }
        if($bool == true){
            $context->buildViolation('Les agents : '. implode(", ", $listeAgent) .', n\'ont pas la spécialité requise pour la mission')->addViolation();
        }
    }
 
    /**
     * @Assert\Callback
    */
    public function validationNationnnaliteAgentCible(ExecutionContextInterface $context){
        $bool = false;
        $listeCible = array();
        $listeAgent = array();
        foreach($this->getAgent() as $agent){
            foreach($this->getCible() as $cible){
                if($agent->getNationnalite() == $cible->getNationnalite()){
                    $bool = true;
                    array_push($listeAgent, $agent->getNom());
                    array_push($listeCible, $cible->getNom());
                }
            }
        }
        if($bool == true){
            $context->buildViolation('Les cibles : '. implode(", ", $listeCible) .', ont la même nationnalité que les agents : '. implode(", ", $listeAgent).'.')->addViolation();
        }
     }

    /**
     * @Assert\Callback
     */
    public function validationContactPaysMission(ExecutionContextInterface $context){
        $bool = false;
        $listeContact = array();
        foreach($this->getContact() as $contact){
                if($contact->getNationnalite()->getPays() !== $this->getPays()){
                    $bool = true;
                    array_push($listeContact, $contact->getNom());
                }
        }
        if($bool == true){
            $context->buildViolation('Les contact : ' . implode(", ", $listeContact) .', n\'ont pas la nationnalité du pays ou se déroule la mission')->addViolation();
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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
     * @return Collection|Agent[]
     */
    public function getAgent(): Collection
    {
        return $this->Agent;
    }

    public function addAgent(Agent $agent): self
    {
        if (!$this->Agent->contains($agent)) {
            $this->Agent[] = $agent;
        }

        return $this;
    }

    public function removeAgent(Agent $agent): self
    {
        $this->Agent->removeElement($agent);

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getContact(): Collection
    {
        return $this->contact;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contact->contains($contact)) {
            $this->contact[] = $contact;
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        $this->contact->removeElement($contact);

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->Statut;
    }

    public function setStatut(string $Statut): self
    {
        $this->Statut = $Statut;

        return $this;
    }

    /**
     * @return Collection|Planque[]
     */
    public function getPlanque(): Collection
    {
        return $this->Planque;
    }

    public function addPlanque(Planque $planque): self
    {
        if (!$this->Planque->contains($planque)) {
            $this->Planque[] = $planque;
        }

        return $this;
    }

    public function removePlanque(Planque $planque): self
    {
        $this->Planque->removeElement($planque);

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * @return Collection|Cible[]
     */
    public function getCible(): Collection
    {
        return $this->Cible;
    }

    public function addCible(Cible $cible): self
    {
        if (!$this->Cible->contains($cible)) {
            $this->Cible[] = $cible;
            $cible->setMission($this);
        }

        return $this;
    }

    public function removeCible(Cible $cible): self
    {
        if ($this->Cible->removeElement($cible)) {
            // set the owning side to null (unless already changed)
            if ($cible->getMission() === $this) {
                $cible->setMission(null);
            }
        }

        return $this;
    }

    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getSpecialite(): ?Specialite
    {
        return $this->Specialite;
    }

    public function setSpecialite(?Specialite $Specialite): self
    {
        $this->Specialite = $Specialite;

        return $this;
    }
}
