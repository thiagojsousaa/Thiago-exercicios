<?php
class Carro{
//Acessíveis apenas dentro
//da classe(Encapsulamento)
private $modelo;
private $motor;
private $ano;
//setters
public function setModelo($modelo)
$this->modelo = $modelo;
public function setMotor($motor){
$this->motor = $motor;
}
public function setAno($ano) {
$this->ano = $ano;
}
1/getters
public function getModelo(){
return $this->modelo;
}
public function getMotor(){
return $this->motor;
}public function getAno(){
return $this->ano;
}
public function retornaVetor() {
return array(
$this->getModelo(),
$this->getMotor(),
$this->getAno()
}
public function retornaDicionario(){
return array(
"modelo" => $this->getModelo(),
"motor" => $this->getMotor(),
"ano"=> $this->getAno()
);
public function exibirDicionario(){
    $arr2 = $this->retornaDicionario();
    echo $arr2["modelo").'<br/>';
    echo $arr2["motor").'<br/>';
    echo $arr2["ano").'<br/>';
    }
    public function exibirVetor(){
    $vetor - $this->retornaVetor();
    echo $vetor[@].'<br/>';
    echo $vetor[1].'<br/>';
    echo $vetor[2].'<br/>';
    }
    }
    $carro1 = new Carro;
    // $carro1->modelo="Gol GT";
    $carro1->setModelo("Gol GT");
    $carro1->setMotor("1.6");
    $carro1->setAno("2018");
    //exibindo com vetor
    $carro1->exibirVetor();
    echo "<br/><br/>";
    Ilexibindo com dicionario
    $carro1->exibirDicionario();
    echo "<br/><br/>";
    var_dump($carrol);
 ?>