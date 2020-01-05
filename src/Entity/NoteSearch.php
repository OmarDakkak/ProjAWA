<?php
namespace App\Entity;

class NoteSearch {
    /**
     * @var string|null
     */
    private $Matiere;
    
    public function setMatiere(string $Matiere): NoteSearch
    {
        $this->Matiere = $Matiere;

        return $this;
    }
    public function getMatiere(): ?string{
        return $this->Matiere;
    }




}