<?php

class Produto 
{
    public function __construct(
        private int $codigo,
        private string $nome,
        private float $preco
    ) {}

    public function getCodigo(): int 
    {
        return $this->codigo;
    }

    public function setCodigo(int $codigo): void 
    {
        $this->codigo = $codigo;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }

    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }

    // Métodos Getter e Setter para Preço
    public function getPreco(): float 
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void 
    {
        $this->preco = $preco;
    }
}
