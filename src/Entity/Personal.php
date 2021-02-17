<?php

namespace App\Entity;

use App\Repository\PersonalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PersonalRepository::class)
 */
class Personal
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer",length=20)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Nombre;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Apellido;

    /**
     * @ORM\Column(type="integer")
     */
    private $Sueldo;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $Puesto;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Estado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setID(string $ID): self
    {
        $this->ID = $ID;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): self
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->Apellido;
    }

    public function setApellido(string $Apellido): self
    {
        $this->Apellido = $Apellido;

        return $this;
    }

    public function getSueldo(): ?int
    {
        return $this->Sueldo;
    }

    public function setSueldo(int $Sueldo): self
    {
        $this->Sueldo = $Sueldo;

        return $this;
    }

    public function getPuesto(): ?string
    {
        return $this->Puesto;
    }

    public function setPuesto(string $Puesto): self
    {
        $this->Puesto = $Puesto;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->Estado;
    }

    public function setEstado(string $Estado): self
    {
        $this->Estado = $Estado;

        return $this;
    }
}
