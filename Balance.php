<?php
//Neftaly Yescas Pérez. - Examen Elemento 1 - Desarrollo Web Integral - Maestro: Cesar Eduardo Romero Hernandez.
//IDGS 9-2. - Fecha: 08/10/2021.

class Cuenta{
    private float $balanceTotal = 0;


    public function hacerDeposito($saldo){
        $this->balanceTotal=$this->balanceTotal+$saldo;
        print("Se hizo un deposito a su cuenta de: ".$saldo."$ MXN.     -- ");
    }

    public function hacerRetiro($saldo){
        if($this->balanceTotal>=$saldo){
            $this->balanceTotal=$this->balanceTotal-$saldo;
            print("La cantidad que usted a retirado es de: ".$saldo."$ MXN.     -- ");   
        }else{
            print("Usted no cuenta con la cantidad necesaria para realizar un retiro.      -- ");  
        }
    }

    public function getBalanceTotal(){
        print("El saldo de tu cuenta es de: ".$this->balanceTotal."$ MXN.      --  ");
    }
}



$deposito = 1550;
$retiro = 600;
$cuenta = new Cuenta;



$cuenta -> hacerDeposito($deposito);
$cuenta -> hacerRetiro($retiro);
$cuenta -> getBalanceTotal();

?>
