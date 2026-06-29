<?php

class Funcionario 
{

    private $id;
    private $nome;
    private $matricula;



    public function getId(): int 
    {
        return $this->id;
    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }

    public function getMatricula(): string 
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void 
    {
        $this->matricula = $matricula;
    }
}
