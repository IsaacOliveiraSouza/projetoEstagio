<?php
include "conectar.php";
$sql = "select * from produtos;";
$tabela= " <link rel='stylesheet' href='style.css'> 
    <table border='1' align='center'>";
if($resultado = $con->query($sql)){
    while($linha = $resultado->fetch_object()){
        $referencia = $linha->referencia;
        $tabela.="<tr>";
            $tabela.="<td>". $linha->referencia."</td>";
            $tabela.="<td>". $linha->valor."</td>";
            $tabela.="<td>". $linha->nome."</td>";
            $tabela.="<td>". $linha->fornecedor."</td>";
            $tabela.="<td><a href='adicionar.php?referencia=$referencia'>adicionar</a></td>";
 //           $tabela.="<td><a href= Formularioalterar.php?idTipoAnimal=$idTipoAnimal'>alterar</a></td>";
        $tabela.="</tr>";
    }
    echo $tabela;
}
?>