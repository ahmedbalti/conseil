<?php

class admin
{
    private $id;
    private $name;
    private $password;


    public function __construct($id, $name, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPassword()
    {
        return $this->titre;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setTitre($password)
    {
        $this->password = $password;
    }


}
