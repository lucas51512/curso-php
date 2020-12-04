<?php 
class Conta {
        public string $cpfTitular;
        public string $nomeTitular;
        private float $saldo = 0;

        public function saca(float $valorASacar): void {
                if ($valorASacar > $this->saldo) {
                        echo "Saldo indisponível";
                        return;
                }
                        $this ->saldo -= $valorASacar;
        }

        public function deposita(float $valorADepositar): void {
                if ($valorADepositar < 0) {
                        echo "Valor precisa ser positivo";
                        return;
                }
                        $this->saldo += $valorADepositar;
        }

        public function transfere(float $valorATransferir, Conta $contaDestino): void {
                if ($valorATransferir > $this->$saldo) {
                        echo "Saldo Indisponível";
                        return;
                }
                $this->saca($valorATransferir);
                $contaDestino->deposita($valorATransferir);
        }
}