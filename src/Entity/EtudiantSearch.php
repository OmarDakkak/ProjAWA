<?php
namespace App\Entity;

class EtudiantSearch {
    /**
     * @var string|null
     */
    private $Niveau;

    /**
     * @var string|null
     */
    private $Nom;

    public function getNiveau(): ?string
    {
        return $this->Niveau;
    }
    public function setNiveau(string $Niveau): EtudiantSearch
    {
        $this->Niveau = $Niveau;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): EtudiantSearch
    {
        $this->Niveau = $Nom;

        return $this;
    }


}