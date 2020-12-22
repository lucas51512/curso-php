<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa, CPF};

class Funcionario extends Pessoa {

    protected string $nome;
    protected string $cargo;
    protected CPF $cpf;   
    private float $salario;

    public function __construct(string $nome, CPF $cpf, string $cargo, float $salario ) {
        
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperaSalario(): float {
        return $this->salario;
    }

    public function calculaBonificacao(): float {
        return $this->salario * 0.1;
    }
}