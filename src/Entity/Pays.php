<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaysRepository::class)
 */
class Pays
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
     * @ORM\OneToMany(targetEntity=Mission::class, mappedBy="pays")
     */
    private $missions;

    /**
     * @ORM\OneToMany(targetEntity=Planque::class, mappedBy="pays")
     */
    private $planques;

    public function __construct()
    {
        $this->missions = new ArrayCollection();
        $this->planques = new ArrayCollection();
    }

    /**
     * @Assert\Callback
     */
    public function validationPaysPlanqueMission(ExecutionContextInterface $context)
    {
        $bool = false;
        if($this->getMissions() !== null)
        foreach($this->getMissions() as $mission){
           if($mission->getPays()->getNom() !== $this->getPays()->getNom()){
               $bool = true;
           }
        }
        if($bool == true){
            $context->buildViolation('Impossible d\' ajouter ou de modifier cette Planque car elle doit être dans le même pays que la mission selectionné ')->addViolation();
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
            $mission->setPays($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        if ($this->missions->removeElement($mission)) {
            // set the owning side to null (unless already changed)
            if ($mission->getPays() === $this) {
                $mission->setPays(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Planque[]
     */
    public function getPlanques(): Collection
    {
        return $this->planques;
    }

    public function addPlanque(Planque $planque): self
    {
        if (!$this->planques->contains($planque)) {
            $this->planques[] = $planque;
            $planque->setPays($this);
        }

        return $this;
    }

    public function removePlanque(Planque $planque): self
    {
        if ($this->planques->removeElement($planque)) {
            // set the owning side to null (unless already changed)
            if ($planque->getPays() === $this) {
                $planque->setPays(null);
            }
        }

        return $this;
    }
}
