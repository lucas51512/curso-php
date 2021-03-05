<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes {
    private float $totalBonificacoes = 0;

    public function adicionaBinificacaoDe(Funcionario $funcionario): void {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float {
        return $this->totalBonificacoes;
    }
}