<?php
namespace app\models;
use PDO;
class Users extends connexionDB{
    private $id;
    private $role;
    private $civility;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    private $address;
    private $postCode;
    private $city;
    private $created_at;
    private $updated_at;
    
    function __construct()
    {
        
    }
 


    public function create()
    {
        // $sqlState = $this->database()->prepare("INSERT INTO users VALUES(null,?,?,?,?,?,?,?,?,?,?,?)");
      
        $sqlState = static::database()->prepare("INSERT INTO users VALUES(null,?,?,?,?,?,?,?,?,?,?,?)");
       return $sqlState->execute([
           
            $this->role,
            $this->civility,
            $this->firstname,
            $this->lastname,
            $this->email,
            $this->password,
            $this->address,
            $this->postCode,
            $this->city,
            $this->created_at,
            $this->updated_at
        ]);
        
    }
    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of civility
     */ 
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * Set the value of civility
     *
     * @return  self
     */ 
    public function setCivility($civility)
    {
        $this->civility = $civility;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstname = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastname($lastName)
    {
        $this->lastname = $lastName;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of postCode
     */ 
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     *
     * @return  self
     */ 
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

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
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}