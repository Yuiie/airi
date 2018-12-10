<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AmisRepository")
 */
class Amis
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    public $req;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    public $dest;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $enable;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date;

    public function __construct()
    {
        $this->req = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReq(): ?User
    {
        return $this->req;
    }

    public function setReq(?User $req): self
    {
        $this->req = $req;

        return $this;
    }

    public function getDest(): ?User
    {
        return $this->dest;
    }

    public function setDest(?User $dest): self
    {
        $this->dest = $dest;

        return $this;
    }

    public function getEnable(): ?int
    {
        return $this->enable;
    }

    public function setEnable(?int $enable): self
    {
        $this->enable = $enable;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
