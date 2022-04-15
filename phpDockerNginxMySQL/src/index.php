<?php
echo "Ambiente utilizando PHP8 + MySQL + PHPMyADMIN \n" ;

/* Testando a conexao*/
try {
    $con = new mysqli('mysql_db','root','root','mysql');
    if($con){
        echo "**** Conectado *****";
    }

} catch(Exception $e){
    if($e){
        echo "Nao conectou";
    }
};