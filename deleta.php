<?php
    try{
        $conexao = mysqli_connect("localhost", "matheus19", "", "db_produtos");
        
        $id = $_GET['id'];
        
        $query = "delete from tb_produtos where cd_barra = '$id'";
        
        mysqli_query($conexao, $query);
        echo "produto deletado com sucesso";
    } catch (Exception $e){
        echo "Erro ao deletar: ".$e;
    }
    