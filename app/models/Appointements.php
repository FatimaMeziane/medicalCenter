<?php
namespace App\models;

class Appointements{
private $id;
private $id_user;
private $id_doctor;
private $detail;
private $created_at;
private $update_at;
private $date;
 
function __construct()
{
    
}
/**
 * Get the value of id
 */ 
public function getId()
{
return $this->id;
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
 * Get the value of id_doctor
 */ 
public function getId_doctor()
{
return $this->id_doctor;
}

/**
 * Set the value of id_doctor
 *
 * @return  self
 */ 
public function setId_doctor($id_doctor)
{
$this->id_doctor = $id_doctor;

return $this;
}

/**
 * Get the value of detail
 */ 
public function getDetail()
{
return $this->detail;
}

/**
 * Set the value of detail
 *
 * @return  self
 */ 
public function setDetail($detail)
{
$this->detail = $detail;

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
 * Get the value of update_at
 */ 
public function getUpdate_at()
{
return $this->update_at;
}

/**
 * Set the value of update_at
 *
 * @return  self
 */ 
public function setUpdate_at($update_at)
{
$this->update_at = $update_at;

return $this;
}

/**
 * Get the value of date
 */ 
public function getDate()
{
return $this->date;
}

/**
 * Set the value of date
 *
 * @return  self
 */ 
public function setDate($date)
{
$this->date = $date;

return $this;
}
}