<?php

namespace App\Entity;

use App\Repository\NationnaliteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NationnaliteRepository::class)
 */
class Nationnalite
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
    private $nomNatio;

    /**
     * @ORM\OneToMany(targetEntity=Agent::class, mappedBy="Nationnalite")
     * @Assert\NotBlank()
     */
    private $agents;

    /**
     * @ORM\OneToMany(targetEntity=Cible::class, mappedBy="nationnalite")
     * @Assert\NotBlank()
     */
    private $cibles;

    /**
     * @ORM\OneToMany(targetEntity=Contact::class, mappedBy="nationnalite")
     * @Assert\NotBlank()
     */
    private $contacts;

    /**
     * @ORM\OneToOne(targetEntity=Pays::class, cascade={"persist", "remove"})
     */
    private $Pays;

    public function __construct()
    {
        $this->agents = new ArrayCollection();
        $this->cibles = new ArrayCollection();
        $this->contacts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomNatio(): ?string
    {
        return $this->nomNatio;
    }

    public function setNomNatio(string $nomNatio): self
    {
        $this->nomNatio = $nomNatio;

        return $this;
    }

    /**
     * @return Collection|Agent[]
     */
    public function getAgents(): Collection
    {
        return $this->agents;
    }

    public function addAgent(Agent $agent): self
    {
        if (!$this->agents->contains($agent)) {
            $this->agents[] = $agent;
            $agent->setNationnalite($this);
        }

        return $this;
    }

    public function removeAgent(Agent $agent): self
    {
        if ($this->agents->removeElement($agent)) {
            // set the owning side to null (unless already changed)
            if ($agent->getNationnalite() === $this) {
                $agent->setNationnalite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Cible[]
     */
    public function getCibles(): Collection
    {
        return $this->cibles;
    }

    public function addCible(Cible $cible): self
    {
        if (!$this->cibles->contains($cible)) {
            $this->cibles[] = $cible;
            $cible->setNationnalite($this);
        }

        return $this;
    }

    public function removeCible(Cible $cible): self
    {
        if ($this->cibles->removeElement($cible)) {
            // set the owning side to null (unless already changed)
            if ($cible->getNationnalite() === $this) {
                $cible->setNationnalite(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
            $contact->setNationnalite($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getNationnalite() === $this) {
                $contact->setNationnalite(null);
            }
        }

        return $this;
    }

    public function getPays(): ?Pays
    {
        return $this->Pays;
    }

    public function setPays(?Pays $Pays): self
    {
        $this->Pays = $Pays;

        return $this;
    }
}
