<?php

class Role
{
    private $idrole;
    private $nomrole;

    public function getIdRole()
    {
        return $this->idrole;
    }
    public function getNomRole()
    {
        return $this->nomrole;
    }
 

    public function setIdRole($idrole)
    {
        $this->idrole = $idrole;
    }
    public function setNomRole($nomrole)
    {
        $this->nomrole = $nomrole;
    }
 

    public function __construct($idrole , $nomrole)
    {
        $this->idrole = $idrole;
        $this->nomrole = $nomrole;

    }
}
