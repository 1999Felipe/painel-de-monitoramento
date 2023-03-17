<?php
$host = "localhost";
$nome = "root";
$senha = "";
$banco = "callcenter";

$conecta = mysqli_connect($host,$nome,$senha,$banco);

if (!$conecta) {
    die("a conexao falhou " . mysqli_connect_error());
}
echo "Conectado com sucesso";
mysqli_close($conecta);

date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date('d/m/Y H:i:s');


?>






















































 






































