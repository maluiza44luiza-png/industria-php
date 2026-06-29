<?php

class Funcionario 
{
    // Construtor original com os três atributos privados
    public function __construct(
        private int $id,
        private string $nome,
        private string $matricula
    ) {}

    // Métodos Getter e Setter para o ID
    public function getId(): int 
    {
        return $this->id;
    }

    public function setId(int $id): void 
    {
        $this->id = $id;
    }

    // Métodos Getter e Setter para o Nome
    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }

    // Métodos Getter e Setter para a Matrícula
    public function getMatricula(): string 
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula): void 
    {
        $this->matricula = $matricula;
    }
}
