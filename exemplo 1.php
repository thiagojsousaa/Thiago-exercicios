<?php
//Criar classe pessoa
class Pessoa{
//Atributos
public $nome;
// Métodos
public function falar(){
return "O meu nome é: ".$this->nome;
}
}
//Instanciar um objeto da classe pessoa
$pessoa1 = new Pessoa();//Joao
$pessoa2 = new Pessoa(); //Maria
//Atribuindo valores nos objetos
$pessoa1->$nome="Joao";
$pessoa2->$nome="Maria";|
//Executando um método
echo '<h1>'.$pessoal->falar().'</h1>';
echo '<h1>'.$pessoa2->falar().'</h1>';
?>