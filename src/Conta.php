<?php

 class Conta
 {
     private  $titular;
     private float $saldo;
     private static $numeroDeContas = 0; 

     //Método construtor
     public function __construct(Titular $titular)
     {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
     }

   public function __destruct()
   {
      if (self::$numeroDeContas>2) {
         echo "Há mais de uma conta ativa" . PHP_EOL;
      }
   }
 
     // Método para sacar
     public function saca(float $valorASacar)
     {
         if ($valorASacar > $this->saldo) {
             echo "Saldo indisponível ";
             return;
         }
               $this->saldo -= $valorASacar;
     }
    // Método para depositar
     public function deposita(float $valorADepositar): void
     {
      if ($valorADepositar < $this -> saldo){
         echo 'Informe um valor para ser depositado';
         return;
      }
            $this->saldo += $valorADepositar;
     }
    //  Método para transferir
     public function transfere (float $valorATransferir, conta $contaDestino): void
     {
        if ($valorATransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
            $this -> saca($valorATransferir);
            $contaDestino -> deposita($valorATransferir);
     }
      //  Método para recuperar saldo
     public function recuperaSaldo():float 
     {
        return $this -> saldo;
     }
     
     public function recuperaNomeTitular(): string
     {
         return $this->titular->recuperaNome();
     }
     public function recuperaCpfTitular(): string
     {
         return $this->titular->recuperaCpf();
     }
     
     public static function recuperaNumeroDeContas(): int
     {
      return Conta::$numeroDeContas;
     }
     private function validaNomeTitular(string $nomeTitular)
     {
      if(strlen($nomeTitular)<5){
         echo "O nome precisa conter mais do que 5 caracteres";
         exit();
      }
     }
 } 


// Continuar em método destrutor módulo 5