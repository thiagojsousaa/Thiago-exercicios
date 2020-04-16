<?php
class Endereco{
private $logradouro;
private $numero;
private $cidade;
public function _construct($log, $num, $cid) {
$this->logradouro = $log;
$this->numero = $num;
$this->cidade = $cid;
}
public function _toString() {
return $this->logradouro."
$this->numero."
$this->cidade;
}
public function __destruct() {
echo "DESTRUINDO CLASSE";
// destruir a classe
}
}
//Chamando o _construct()
// Complete com o seu endereco
$meuEndereco = new Endereco("Rua belo Horizonte", "87", "Manaus");
//Imprimindo atraves do_toString
echo $meuEndereco;
echo "<br/><br/>";
//Chamando o _descruct
unset($meuEndereco);
?>