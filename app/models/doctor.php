<?php
namespace App\models;
class Doctor{
    private $nom;
    private $prenom;
    

    function  __construct($nom, $prenom)
    
    {
        $this->nom = $nom;
        $this->prenom = $prenom;    
    }
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
    
}