<?php

require_once 'Funcionario.php';
require_once 'Produto.php';

class OrdemProducao 
{
    public function __construct(
        private int $numeroOrdem,
        private Funcionario $responsavel,
        private Produto $produto,
        private int $quantidade,
        private string $status = 'Em planejamento'
    ) {}

    public function getNumeroOrdem(): int 
    {
        return $this->numeroOrdem;
    }

    public function setNumeroOrdem(int $numeroOrdem): void 
    {
        $this->numeroOrdem = $numeroOrdem;
    }

    public function getResponsavel(): Funcionario 
    {
        return $this->responsavel;
    }

    public function setResponsavel(Funcionario $responsavel): void 
    {
        $this->responsavel = $responsavel;
    }

    public function getProduto(): Produto 
    {
        return $this->produto;
    }

    public function setProduto(Produto $produto): void 
    {
        $this->produto = $produto;
    }

    public function getQuantidade(): int 
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade): void 
    {
        $this->quantidade = $quantidade;
    }

    public function getStatus(): string 
    {
        return $this->status;
    }

    public function setStatus(string $status): void 
    {
        $this->status = $status;
    }

    public function calcularCustoTotal(): float 
    {
        return $this->produto->getPreco() * $this->quantidade;
    }
}
