<?php
class Pessoa{
public $nome="Clemilton Pereira";
protected $idade -27;
private $senha = "123456";
public function verDados(){
echo $this->nome
echo $this->idade
echo $this->senha
"<br/>";
"<br/>";
"<br/>";
}
}
/* 1° situação
class Programador extends Pessoa{
}
$objeto = new Programador();
$objeto->verDados();
/* 2º situação */
class Programador extends Pessoa{
public function verDados(){
echo get_class($this)."<br/>";
echo $this->nome "<br/>";
echo $this->idade "<br/>";
#não é acessível, pois senha é privado -> Notice
echo $this->senha "<br/>";
}
}
$objeto = new Programador();
$objeto->verDados();

?>