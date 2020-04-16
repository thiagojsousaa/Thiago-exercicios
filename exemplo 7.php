<?php
class Documento{
private $numero;
public function getNumero(){
return $this->numero;
}
public function setNumero($n) {
$this->numero-$n;
}
class CPF extends Documento{
public function validar():string{
$numeroCPE $this->getNumero();
I/Validacao CPF
if(strlen($numeroCPF)
11)
return 'true';
else
return 'false';
}
}
class CNPJ extends Documento{
public function validar():string{
$numeroCNPJ $this->getNumero();
//Validacao CNPJ
if (strlen($numeroCNPJ) 14)
return 'true';
else
return 'false';
molim
}
$doc = new CPF();
$doc ->setNumero("42584379058");
echo $doc->getNumero();
echo "<br/>";
echo 'CPF é válido? ->' $doc - validar();
echo "<br/>";
echo "<br/>";
$doc2 = new CNPJ();
$doc2->setNumero("6377326500014");
echo "<br/>";
echo $doc2->getNumero();
echo "<br/>";
echo 'CNPJ é válido? ->' $doc2->validar();

?>