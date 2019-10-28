<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EssaiRepository")
 */
class Essai
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $beurk;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBeurk(): ?string
    {
        return $this->beurk;
    }

    public function setBeurk(string $beurk): self
    {
        $this->beurk = $beurk;

        return $this;
    }
}
