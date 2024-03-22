<?php
/**
 * Esse exemplo abaixo é da nova versão do PHP a partir da 8.1
 *  
 * */
// class Usuario 
// {
//     public function __construct(
//         public readonly string $usuario,
//         public readonly string $senha,
//     ){   
//     }
// }

// $usuario = new Usuario('Gabriel Moretto' , '123435');
// echo $usuario->usuario . ' ' . $usuario->senha;

// //tenta setar uma nova senha que já foi defenida
// $usuario ->senha = '123123';

/**
 * Esse exemplo abaixo é da versão do PHP antes da 8.1
 *  
 * */
class Usuario 
{
    public function __construct(
        public string $usuario,
        public string $senha,
    ){   
    }

    public function usuario():string
    {
        return $this->usuario;
    }
    public function senha() : string
    {
        return $this->senha;
        
    }
}
//define um novo objeto
$usuario = new Usuario('Gabriel Moretto' , '123435');
//Define a senha
echo $usuario->usuario() . ' ' . $usuario->senha() . PHP_EOL;
// Define uma nova senha
$usuario ->senha = '123123';
echo $usuario->usuario() . ' ' . 'Nova senha é ' . $usuario->senha();