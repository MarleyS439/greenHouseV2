<?php

class UserModel
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $cpf;

    // Construtor para iniciar o modelo de usuário
    public function __construct($name = null, $email = null, $password = null, $cpf = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->cpf = $cpf;
    }

    // Getters and setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
}
