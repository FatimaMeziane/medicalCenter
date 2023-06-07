<?php
namespace App\models;
class Doctor{
    private $id;
    private $id_user;
    private $adeli;
    private $speciality;
    

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id_user
     */ 
    public function getId_user()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setId_user($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of adeli
     */ 
    public function getAdeli()
    {
        return $this->adeli;
    }

    /**
     * Set the value of adeli
     *
     * @return  self
     */ 
    public function setAdeli($adeli)
    {
        $this->adeli = $adeli;

        return $this;
    }

    /**
     * Get the value of speciality
     */ 
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * Set the value of speciality
     *
     * @return  self
     */ 
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;

        return $this;
    }
}