<?php

namespace Alura\Banco\Modelo;

class Pessoa {
    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf) {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string {
        return $this->nome;
    }

    public function recuperaCpf(){
        return $this->cpf->recuperaNumero();
    }

    protected function validaNomeTitular(string $nome){
        if(strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}