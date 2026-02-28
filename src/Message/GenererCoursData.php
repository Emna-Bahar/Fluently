<?php

namespace App\Message;

class GenererCoursData
{
    public function __construct(
        private ?string $vocabulaire = null,
        private ?string $grammaire = null,
        private ?string $nouveauxMots = null,
        private ?string $themesYoutube = null
    ) {}

    public function getVocabulaire(): ?string 
    { 
        return $this->vocabulaire; 
    }
    
    public function getGrammaire(): ?string 
    { 
        return $this->grammaire; 
    }
    
    public function getNouveauxMots(): ?string 
    { 
        return $this->nouveauxMots; 
    }
    
    public function getThemesYoutube(): ?string 
    { 
        return $this->themesYoutube; 
    }
}