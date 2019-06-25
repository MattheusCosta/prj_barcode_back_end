<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "db_produtos");
                                //servidor      usuario    senha  banco de dados
        $codigo= $_GET['id'];
        
        $query="UPDATE tb_teste SET teste='$codigo' WHERE 1";
        
        mysqli_query($conexao,$query);
        
    }catch (Exceotion $e){
        echo "Erro ao conectar: ".$e;
    }