<?php
interface Veiculo{
public function acelerar($velocidade);
public function frenar($velocidade);
public function trocarMarcha($velocidade);
}
abstract class Automovel implements Veiculo{
public function acelerar($velocidade) {
echo "O veiculo acelerou ate
$velocidade
km/h";
}
public function frenar($v) {
echo "O veiculo frenou ate "$v. "km/h";
}
public function trocarMarcha ($marcha) {
echo "O veiculo engatou a marcha " $marcha;
melon
}
class DelRey extends Automovel{
}
// Não é possivel instaciar automovel
$carro = new DelRey();
$carro->acelerar (200);
// Não é possivel instaciar automovel
//$carro2 = new Automovel();
?>