<?php

namespace App\Entity;

use App\Repository\MissionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @ORM\ManyToMany(targetEntity=Agent::class, inversedBy="missions")
     */
    private $Agent;

    /**
     * @ORM\ManyToMany(targetEntity=Contact::class, inversedBy="missions")
     */
    private $contact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statut;

    /**
     * @ORM\ManyToMany(targetEntity=Planque::class, inversedBy="missions")
     */
    private $Planque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $specialite;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\OneToMany(targetEntity=Cible::class, mappedBy="mission")
     */
    private $Cible;

    public function __construct()
    {
        $this->Agent = new ArrayCollection();
        $this->contact = new ArrayCollection();
        $this->Planque = new ArrayCollection();
        $this->Cible = new ArrayCollection();
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

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

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

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): self
    {
        $this->specialite = $specialite;

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
}
