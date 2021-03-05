<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel {
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco){

        parent::__construct($nome, $cpf);
        $this->validaNomeTitular($nome);
        $this->endereco = $endereco;

    }

    public function validaNomeTitular(string $nomeTitular) {
        if (strlen($nomeTitular) < 5) {
            echo 'Nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }

    public function recuperaEndereco() {
        return $this->endereco->recuperaCidade();
        return $this->endereco->recuperaBairro();
        return $this->endereco->recuperaRua();
        return $this->endereco->recuperaNumero();
    }

    public function podeAutenticar(string $senha): bool {
        return $senha === 'abcd';
    }
}